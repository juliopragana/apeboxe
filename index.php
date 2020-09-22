<?php 



session_start();





require_once("vendor/autoload.php");



date_default_timezone_set('America/Cayenne');





use \Slim\Slim;

use Rain\Tpl;

use \Sistema\Page;

use \Sistema\PageAdmin;

use \Sistema\Model\Atleta;

use \Sistema\Model\Boleto;

use \Sistema\Model\User;
   



$app = new Slim();



$app->config('debug', true);



# ########################################## ADMIN ########################################### #



//rota raiz

$app->get('/', function() {



    $page = new Page();

   

    $page->setTpl("index");



    Atleta::clearAtletaSuccess();

    

});



$app->get('/teste', function(){

    $page = new Page();

   

    $page->setTpl("teste");

});







$app->get('/cadastro-atleta', function(){



    $page = new Page();

    

    $msg = Atleta::getSuccess();



    $page->setTpl("cadastro-atleta");



});





$app->post('/cadastro-atleta', function(){



    $atleta = new Atleta();



    $valor = 72.00;



    $_POST["status_inscricao"] = 1;



    $tituloBoleto = 'Filiação de Atleta';



    $dirUpload = "res/upload/curso-formacao";



    $imagemDefault = "res/upload/default.png";



    $file = $_FILES["image"];



    if(!$file["name"] == ''){

        



        if($file["error"] && $file === NULL){

            User::setError('Não foi possível carregar a imagem.');  

        }



        if(!isset($dirUpload)){

            mkdir($dirUpload);

        };

        

        if(!move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])){

            User::setError('Erro ao salvar imagem');  

        } 



        $_POST["image"] = '/'.$dirUpload. '/'. $file["name"];



    } else {



        $_POST["image"] = '/'.$imagemDefault;



    }

    



    $atleta->setData($_POST);



    // var_dump($atleta);



     try{

        

        // função que salva o alteta no banco

        $atleta->cadAtleta();

        

        try{

        //função que gera o boleto    

        $boleto = Atleta::gerarBoleto($atleta, $valor, $tituloBoleto);

        

        // var_dump($boleto);

        }                    

         catch(Exception $e){

            echo "Não foi possível salvar o boleto, tente novamente na opção de regerar boleto.<br>".$e->getMessage();

        }

        

        foreach($atleta as $key => $value){

            //função que salva o boleto no banco 

            $resposta = Atleta::salvarBoleto($boleto, $valor, $id = $value['id_atleta']);

            Atleta::setAtletaSuccess($resposta);



        }

        

       

        header("Location: /sucesso");

        exit();

        

        } catch (Exception $e){

        echo "Não foi possível salvar seus dados, tente novamente mais tarde <br>".$e->getMessage();

    }





});



$app->get('/inscricao-curso', function(){



    $page = new Page();

    

    $page->setTpl("inscricao-curso");

    

});



$app->post('/cadastro-curso', function(){



    $atleta = new Atleta();



    $valor = 302.00;



    $referencia = 'Inscrição do Curso de Formação Técnica';



    $_POST["img"] = "";



    $_POST["status_inscricao"] = 1;

       

    $tituloBoleto = 'Boleto do Curso de Formação';



    $atleta->setData($_POST);


    // var_dump($atleta);
    try{

        

        // função que salva o alteta no banco

        $atleta->cadCurso();



        try{

            $boleto = Atleta::gerarBoleto($atleta, $valor, $tituloBoleto, $referencia);



            // var_dump($boleto);



        } catch(Exception $e){

            echo "Não foi possível gerar seu Boleto, tente novamente mais tarde <br>".$e->getMessage();

        }



        foreach($atleta as $key => $value){

            //função que salva o boleto no banco 

            $resposta = Atleta::salvarBoletoCurso($boleto, $valor, $id = $value['id_atleta']);

            Atleta::setAtletaSuccess($resposta);



            // var_dump($resposta);

        }



        header("Location: /sucesso");

        exit();



    

    } catch (Exception $e){

        echo "Não foi possível salvar seus dados, tente novamente mais tarde <br>".$e->getMessage();

    }







});







$app->post('/notifyboleto', function(){



    $dados = $_POST;



});



$app->get('/sucesso', function(){

    $page = new Page();



    $sucesso = Atleta::getAtletaSuccess();

    if(!$sucesso){

        header("Location: /");

        exit();

    }



    $page->setTpl("sucesso", array(

        'success'=>Atleta::getAtletaSuccess()

    ));

}); 



$app->get('/edit-atleta', function(){

    $page = new Page();



    $page->setTpl("edit-atleta", array(

        'success'=>Atleta::getAtletaSuccess()

    ));

});



$app->post('/edit-atleta', function(){



    $id = '';

     try{



        $dados = Atleta::getAtletaSuccess();



        foreach($dados as $key => $value){

            $id = $value['id_atleta'];

        }   



        $_POST['id_atleta'] = $id;



        $retorno = Atleta::editAtleta($_POST);



        $resultado =  Atleta::setAtletaSuccess($retorno);

        

        var_dump($resultado);

    //    header("Location: /sucesso");

    //    exit();





    } catch(Exception $e){

        throw new Exception("Erro ao atualizar " .$e);

        

    }

});







$app->get('/segunda-via', function(){

    $page = new Page();

    $nome_atleta = '';

    $atleta = Atleta::getAtletaSuccess();

    if($atleta != 0){
        $nome_atleta = $atleta[0]['nome_atleta'];
    }

    // if(!$atleta){

    //     header("Location: /");

    //     exit();

    // }

    

    $page->setTpl("segunda-via", array(

        'nome'=>$nome_atleta,

        'success'=>Atleta::getAtletaSuccess(),
        'erro'=>Atleta::getAtletaError()

        

    ));

   

}); 

$app->post('/segunda-via', function(){
    
try{

        $resultado = Atleta::segundaVia($_POST['cpf'], $_POST['datanascimento']);

        Atleta::setAtletaSuccess($resultado);

        header("Location: /segunda-via");
       
        exit();
       

    } catch(Exception $e){
        Atleta::clearAtletaSuccess(); 

        $mensagem = array([

            'titulo'=>'CPF ou Data de Nascimento não encontrados',

            'mensagem'=>'Verifique seus dados!'

            ]);
        

        Atleta::setAtletaError($mensagem);

        header("Location: /segunda-via");
        
         
        exit();

    }

    
});



$app->get('/erro-cpf', function(){

    // Atleta::clearAtletaError();



    $page = new Page();



    $erro = Atleta::getAtletaError();



    if(!$erro){

        header("Location: /");

        exit();

    }



    $page->setTpl("erro-cpf", array(

        'error'=>$erro

    ));



    Atleta::clearAtletaError();



});



$app->post('/checar-cpf', function(){

    

    $results = Atleta::checarCpf($_POST['cpf']);



    

});

$app->post('/checar-usuario', function(){

    

    $results = User::checarUsuario($_POST['usuario']);



    

});

$app->post('/aprovar-boleto', function(){
    $results = Atleta::aprovaBoleto( $_POST['codigo'], $_POST['id_atleta']);
    
    // echo 'false';
});

$app->post('/cancelar-boleto', function(){
    $results = Atleta::cancelarBoleto( $_POST['codigo']);
    
    // echo 'false';
});

$app->post('/regerar-boleto', function(){
    $results = Atleta::regerarBoleto( $_POST['id_atleta'], $_POST['codigo']);
    
    // echo 'false';
});



########################## ADMINISTRATIVO #################################


$app->get('/painel-curso', function(){
    User::verificaLogin();
    $candinscritos = 0;
    $candiboletospend = 0;
    $candiboletopago = 0;
    $candiboletocanc = 0;
    $listapendente = array();
    $listapago = array();

    $resultado = Atleta::listAtletasCurso();

    
     // var_dump ($listapendente);

    foreach($resultado as $value){
    //    var_dump($value);

        if(isset($value['id_atleta']) && $value['status_inscricao'] == 1 || $value['status_inscricao'] == 2 ){
            $candinscritos = $candinscritos + 1;
        };

        if(isset($value['id_atleta']) && $value['status_boleto'] == 1){
            $candiboletospend = $candiboletospend + 1;
        };

        if(isset($value['id_atleta']) && $value['status_boleto'] == 2){
            $candiboletopago = $candiboletopago + 1;
        };

        if(isset($value['id_atleta']) && $value['status_boleto'] == 0){
            $candiboletocanc = $candiboletocanc + 1;
        };

        if(isset($value['id_atleta']) && $value['status_boleto'] == 1){
            array_push($listapendente, $value);
        };

        if(isset($value['id_atleta']) && $value['status_boleto'] == 2){
            array_push($listapago, $value);
        };

    }  
    if(empty($listapendente)){
        $listapendente = null;
    }

    if(empty($listapago)){
        $listapago = null;
    }

    
    $page = new PageAdmin();


    $page->setTpl("index", array(
        "qtdinsc"=>$candinscritos,
        "qtdpend"=>$candiboletospend,
        "qtdpago"=>$candiboletopago,
        "qtdcanc"=>$candiboletocanc,
        "listapend"=>$listapendente,
        "listapago"=>$listapago,
        

    ));



});





$app->get('/painel-curso/login', function(){
   
    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);
    
    $page->setTpl('login', array(
        'error'=>User::getError()
    ));

});

$app->post('/painel-curso/login', function(){
    // User::verificaLogin();
    try{
        User::login($_POST["usuario"],$_POST["senha"]);
        header("location: /painel-curso");
        exit();
    }catch(Exception $e){
        User::setError('Usuário ou senha inválidos');
        header("location: /painel-curso/login");
        exit();
    }
    

});

$app->get('/painel-curso/logout',function(){
    User::verificaLogin();

    User::logout();

    header("Location: /painel-curso");
    exit;
});



$app->get('/painel-curso/usuarios', function(){
    
    User::verificaLogin();

    $users = User::listAll();
    
    $page = new PageAdmin();

    

    $page->setTpl("usuarios",array(

        "users"=>$users,
        "success"=>User::getSuccess()
    ));
});


$app->get('/painel-curso/cadastro-usuario', function(){
    User::verificaLogin();

    $page = new PageAdmin();


    $page->setTpl("cadastro-usuario", array(
        "error"=>User::getError()
    ));

});


$app->post('/painel-curso/cadastrar-usuario', function(){
    User::verificaLogin();

    $imagemDefault = 'res/img/user/avatar/default.png';

    $user = new User();

    $_POST["status_usuario"] = 1;
    
    $password = password_hash($_POST["senha"], PASSWORD_DEFAULT, [
        'cost'=>12
    ]);

    $_POST["senha"] = $password;

    $file = $_FILES["image"];

    $dirUpload = "res/img/user/avatar";


    if(!$file["name"] == ''){
        

        if($file["error"] && $file === NULL){
            User::setError('Não foi possível carregar a imagem.');  
            header("Location: /painel-curso/cadastro-usuario");
            exit();
        }

        if(!isset($dirUpload)){
            mkdir($dirUpload);
        };
        
        if(!move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])){
            User::setError('Erro ao salvar imagem');  
            header("Location: /painel-curso/cadastro-usuario");
            exit();
        } 

        $_POST["image"] = '/'.$dirUpload. '/'. $file["name"];

    } else {

        $_POST["image"] = '/'.$imagemDefault;

    }
    
    
    $user->setData($_POST);

    // var_dump($user);

    try{
        $user->save();
        User::setSuccess('Usuário cadastrado com sucesso');
        header("Location: /painel-curso/usuarios");
        exit();
    } catch(Exception $e){
        User::setError('Não foi possível cadastrar o usuário, devido ao erro: ' .$e->getMessage());
        header("Location: /painel-curso/cadastro-usuario");
        exit();
    }
    
          
});

$app->get('/painel-curso/boleto/:codigo', function($codigo){
    User::verificaLogin();

    $resultado = Atleta::boletoCurso((int)$codigo);
    
    $page = new PageAdmin();


    $page->setTpl("boleto", array(
       "dados"=>$resultado
    ));

});


$app->get('/painel-curso/lista-alunos', function(){
    User::verificaLogin();

    $resultado = Atleta::listAtletasCurso();
    $listaalunos = array();

    foreach($resultado as $value){

        if(isset($value['id_atleta']) && $value['status_boleto'] == 2 && $value['status_inscricao'] == 2){
            array_push($listaalunos, $value);
        };
    }   

    $page = new PageAdmin();


    $page->setTpl("lista-alunos", array(
       "alunos"=>$listaalunos
    ));    

});

$app->get('/painel-curso/boletos-cancelados', function(){
    User::verificaLogin();

    $resultado = Atleta::listAtletasCurso();
    $listaalunos = array();

    foreach($resultado as $value){

        if(isset($value['id_atleta']) && $value['status_boleto'] == 0){
            array_push($listaalunos, $value);
        };
    }   

    $page = new PageAdmin();


    $page->setTpl("boletos-cancelados", array(
       "alunos"=>$listaalunos
    ));    

});




// $app->get('/painel-curso/boleto/aprovar', function(){
//     User::verificaLogin();

//     $dados = User::SESSION();
    
    

//     var_dump($dados);
    
//     // $page = new PageAdmin();


//     // $page->setTpl("boleto", array(
//     //    "dados"=>$resultado
//     // ));

// });






// $app->get('/gerar-boleto', function(){

//     $page = new Page([

//         "header"=>false,

//         "footer"=>false

//     ]);

    

//     // // DADOS DO BOLETO PARA O SEU CLIENTE

//     $dias_de_prazo_para_pagamento = 5;

//     $taxa_boleto = 2.95;

//     $data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006"; 

//     $valor_cobrado = "2950,00"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal

//     $valor_cobrado = str_replace(",", ".",$valor_cobrado);

//     $valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');



//     $dadosboleto["nosso_numero"] = '12345678';  // Nosso numero - REGRA: M�ximo de 8 caracteres!

//     $dadosboleto["numero_documento"] = '0123';	// Num do pedido ou nosso numero

//     $dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA

//     $dadosboleto["data_documento"] = date("d/m/Y"); // Data de emiss�o do Boleto

//     $dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)

//     $dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com v�rgula e sempre com duas casas depois da virgula



//     // DADOS DO SEU CLIENTE

//     $dadosboleto["sacado"] = "Nome do seu Cliente";

//     $dadosboleto["endereco1"] = "Endereço do seu Cliente";

//     $dadosboleto["endereco2"] = "Cidade - Estado -  CEP: 00000-000";



//     // INFORMACOES PARA O CLIENTE

//     $dadosboleto["demonstrativo1"] = "Pagamento de Compra na Loja Nonononono";

//     $dadosboleto["demonstrativo2"] = "Mensalidade referente a nonon nonooon nononon<br>Taxa banc�ria - R$ ".number_format($taxa_boleto, 2, ',', '');

//     $dadosboleto["demonstrativo3"] = "BoletoPhp - http://www.boletophp.com.br";

//     $dadosboleto["instrucoes1"] = "- Sr. Caixa, cobrar multa de 2% após o vencimento";

//     $dadosboleto["instrucoes2"] = "- Receber até 10 dias após o vencimento";

//     $dadosboleto["instrucoes3"] = "- Em caso de dúvidas entre em contato conosco: xxxx@xxxx.com.br";

//     $dadosboleto["instrucoes4"] = "&nbsp; Emitido pelo sistema Projeto BoletoPhp - www.boletophp.com.br";



//     // DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE

//     $dadosboleto["quantidade"] = "";

//     $dadosboleto["valor_unitario"] = "";

//     $dadosboleto["aceite"] = "";		

//     $dadosboleto["especie"] = "R$";

//     $dadosboleto["especie_doc"] = "";





//     // ---------------------- DADOS FIXOS DE CONFIGURA��O DO SEU BOLETO --------------- //





//     // DADOS DA SUA CONTA - ITA�

//     $dadosboleto["agencia"] = "1565"; // Num da agencia, sem digito

//     $dadosboleto["conta"] = "13877";	// Num da conta, sem digito

//     $dadosboleto["conta_dv"] = "4"; 	// Digito do Num da conta



//     // DADOS PERSONALIZADOS - ITA�

//     $dadosboleto["carteira"] = "175";  // C�digo da Carteira: pode ser 175, 174, 104, 109, 178, ou 157



//     // SEUS DADOS

//     $dadosboleto["identificacao"] = "BoletoPhp - Código Aberto de Sistema de Boletos";

//     $dadosboleto["cpf_cnpj"] = "";

//     $dadosboleto["endereco"] = "Coloque o endereço da sua empresa aqui";

//     $dadosboleto["cidade_uf"] = "Cidade / Estado";

//     $dadosboleto["cedente"] = "Coloque a Razão Social da sua empresa aqui";

          

//     $dboleto = Boleto::dadosBoleto($dadosboleto);

//     $boleto = new Boleto();

//     $cd = $dboleto["codigo_barras"];

//     $imbcd = $boleto->fbarcode($cd);

    

  

//    $page->setTpl("boleto-itau",array(

//     'success'=>Atleta::getSuccess(),

//         'dadosboleto'=>$dboleto,

//          'fbarcode' =>$imbcd

//     ));    

// });



// $app->get('/teste', function(){

//     $page = new Page([

//         "header"=>false,

//         "footer"=>false

//     ]);



//     $page->setTpl("teste",array(

//         'success'=>Atleta::getSuccess()

//     ));

// }); 







$app->run();




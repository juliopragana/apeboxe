<?php

namespace Sistema\Model;

date_default_timezone_set('America/Cayenne');



use \Sistema\DB\Sql;

use \Sistema\Model;



class Atleta extends Model{



    const SESSION = "Atleta";

    const ERROR = "AtletaError";

    const SUCCESS = "AtletaSuccesss";

    const ERRORBOLETO = "BoletoError";

    const SUCCESSBOLETO = "BoletoSuccess"; 

    const SUCCESSCADASTRO = "CadastroSuccess"; 

    const ERRORCADASTRO = "CadastroError";    



     

    public function cadAtleta(){

        Atleta::clearAtletaSuccess();

            $sql = new Sql();   



            $results = $sql->select("CALL sp_atleta_save(:nome_atleta, :email, :cpf, :telefone, :datanascimento, :sexo, :img, :cep, :rua, :complemento, :num, :bairro, :cidade, :uf, :academia, :professor, :status_inscricao)", 

            array(

            ":nome_atleta"=>$this->getnome_atleta(),

            ":email"=>$this->getemail(),

            ":cpf"=>$this->getcpf(),

            ":telefone"=>$this->gettelefone(),

            ":datanascimento"=>$this->getdatanascimento(),

            ":sexo"=>$this->getsexo(),

            ":img"=>$this->getimg(),

            ":cep"=>$this->getcep(),

            ":rua"=>$this->getrua(),

            ":complemento"=>$this->getcomplemento(),

            ":num"=>$this->getnum(),

            ":bairro"=>$this->getbairro(),

            ":cidade"=>$this->getcidade(),

            ":uf"=>$this->getuf(),

            ":academia"=>$this->getacademia(),

            ":professor"=>$this->getprofessor(),

            ":status_inscricao"=>$this->getstatus_inscricao()

            ));



            if($results === 0) return $error = Atleta::setError();



            return $this->setData($results[0]);



     }



     public function cadCurso(){

        Atleta::clearAtletaSuccess();    

        $sql = new Sql();   



        $results = $sql->select("CALL sp_atleta_curso_save(:nome_atleta, :email, :cpf, :telefone, :datanascimento, :sexo, :img, :cep, :rua, :complemento, :num, :bairro, :cidade, :uf, :academia, :status_inscricao)", 

        array(

        ":nome_atleta"=>$this->getnome_atleta(),

        ":email"=>$this->getemail(),

        ":cpf"=>$this->getcpf(),

        ":telefone"=>$this->gettelefone(),

        ":datanascimento"=>$this->getdatanascimento(),

        ":sexo"=>$this->getsexo(),

        ":img"=>$this->getimg(),

        ":cep"=>$this->getcep(),

        ":rua"=>$this->getrua(),

        ":complemento"=>$this->getcomplemento(),

        ":num"=>$this->getnum(),

        ":bairro"=>$this->getbairro(),

        ":cidade"=>$this->getcidade(),

        ":uf"=>$this->getuf(),

        ":academia"=>$this->getacademia(),

        ":status_inscricao"=>$this->getstatus_inscricao()

        ));



        if($results === 0) return $error = Atleta::setError();



        return $this->setData($results[0]);



 }
    public static function listAtletasCurso(){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_curso a INNER JOIN tb_boleto_curso b USING(id_atleta) WHERE a.id_atleta = b.id_atleta");

        if($results === 0) return $error = Atleta::setError('Nenhum usuário encontrado');

        return $results;

    }

    public static function boletoCurso($codigo){
        $sql = new Sql();

        $results = $sql->select('SELECT a.id_atleta, a.nome_atleta, a.cpf, a.email, a.telefone, b.codigo, b.referencia, b.valor, b.data_vencimento, b.linkdownload, b.status_boleto, b.id_atleta from tb_curso a INNER JOIN tb_boleto_curso b WHERE a.id_atleta = b.id_atleta AND b.codigo = :codigo;', array(
            ":codigo"=>$codigo
        ));

        if($results === 0) return $error = Atleta::setError('Nenhum usuário encontrado');

        return $results;
    } 






    //  public static function hashId(){

    //     $sql = new Sql();



    //     $numero_de_bytes = 12;

    //     $random = random_bytes($numero_de_bytes);



    //     $results = $sql->query('SELECT * FROM tb_atleta WHERE hash_id = :random', array(

    //         ":random"=>$random

    //     ));





    //     // if($results)





    //  }



    public static function uploadfoto($foto, $nome_pasta){



    }



    public static function checarCpf($cpf){
        
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_curso WHERE cpf = :cpf", array(
            ":cpf"=>$cpf
        ));

        if($results != NULL) {
            echo 'false';
         }else{
            echo 'true';
        } 
    
    }
    
    public static function aprovaBoleto($codigo, $id_atleta){
        $sql = new Sql();
        
        try{
            $results = $sql->select("CALL sp_aprovar_boleto (:codigo, :id_atleta)", array(
                ":codigo"=>$codigo,
                ":id_atleta"=>$id_atleta
                    
            ));

            echo 'true';
        }catch(Exception $e){
            echo 'false';     
        }
        
       }

       public static function cancelarBoleto($codigo){
        $sql = new Sql();
        
        try{
            $results = $sql->query("UPDATE tb_boleto_curso SET status_boleto = 0 WHERE codigo = :codigo;", array(
                ":codigo"=>$codigo
            ));

            echo 'true';
        }catch(Exception $e){
            echo 'false';     
        }
        

       }
       public static function regerarBoleto($id_atleta, $codigo){
        $sql = new Sql();
        
        try{
           $results = $sql->select("SELECT * FROM tb_curso WHERE id_atleta = :id_atleta", array(
                ":id_atleta"=>$id_atleta
            ));

            $valor = 302.00;
            $tituloBoleto = 'Boleto do Curso de Formação';
            $referencia = 'Inscrição do Curso de Formação Técnica';

            $boleto = Atleta::gerarBoleto($results, $valor, $tituloBoleto, $referencia);

            foreach($results as $key => $value){

            Atleta::salvarBoletoCurso($boleto, $valor, $id = $value['id_atleta']);

            }

            $sql->query("UPDATE tb_boleto_curso SET status_boleto = 4 WHERE codigo = :codigo;", array(
                ":codigo" =>$codigo
            ));


            echo 'true';
        }catch(Exception $e){
            echo 'false';     
        }
        

       }
       



    public static function gerarBoleto($dados, $valor, $titulo_boleto, $referencia){



        // var_dump($dados);



        foreach($dados as $key => $value){



        $cpf = $value["cpf"];



        //  var_dump($dados);

        $cpf = str_replace(".","",$cpf);

        $cpf = str_replace("-","",$cpf);



        $postfields = array(

            'token' => '8781FD0ACFE163B8252AC7D8808CC98A83BEBD036D12FDD16F7B06A4563079CB',

            'description'=> $titulo_boleto.' - '.$value['id_atleta'],

            'reference'=>$referencia,

            'dueDate'=>'13/05/2019',

            'amount'=>$valor,

            'payerName'=>$value["nome_atleta"],

            'payerEmail'=>$value["email"],

            'payerPhone'=>$value["telefone"],

            'payerCpfCnpj'=>$cpf

        );


        $pagina = "https://sandbox.boletobancario.com/boletofacil/integration/api/v1/issue-charge";



        $ch = curl_init();



        curl_setopt($ch, CURLOPT_URL, $pagina);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // curl_setopt($ch, CURLOPT_HEADER, true);



        $retorno = curl_exec($ch);



        curl_close($ch);



        $resposta = json_decode($retorno);

        

       

        return $resposta;



        if($retorno === NULL){

            throw new Exception("Não foi possível gerar o boleto, tente novamente mais tarde.");

        }

        

        

        

        

       }



    }





    public static function salvarBoleto($resposta, $valor, $id){



        $sql = new Sql();

       

        

        // foreach($resposta->return as $value){

        //     echo $value->code;

        // }



        foreach($resposta->data->charges as $value){

        

            try{

                $results =  $sql->select("CALL sp_boleto_save(:codigo, :referencia, :data_vencimento, :valor, :link, :linkdownload, :linhadigitavel, :barcodeNumber, :status_boleto, :id_atleta)",

                    array(

                        ":codigo" =>$value->code,

                        ":referencia"=>$value->reference,

                        ":data_vencimento"=>$value->dueDate,

                        ":valor"=>$valor,

                        ":link"=>$value->link,

                        ":linkdownload"=>$value->installmentLink,

                        ":linhadigitavel"=>$value->payNumber,

                        ":barcodeNumber"=>$value->billetDetails->barcodeNumber,

                        ":status_boleto"=>1,

                        ":id_atleta"=>$id

                    ));



                    if($results === 0) return $error = Atleta::setError();



                    return $results;



                    // $_SESSION[Atleta::SUCCESSCADASTRO];



                } catch(Exception $e){

                    throw new Exception("Não foi possível salvar o boleto", 1);

                    return $false;  

                }

        

                 

           



        }



    }



    public static function salvarBoletoCurso($resposta, $valor, $id){



        $sql = new Sql();

       

        

        // foreach($resposta->return as $value){

        //     echo $value->code;

        // }



        foreach($resposta->data->charges as $value){

        

            try{

                $results =  $sql->select("CALL sp_boleto_curso_save(:codigo, :referencia, :data_vencimento, :valor, :linkdownload, :barcodeNumber, :status_boleto, :id_atleta)",

                    array(

                        ":codigo" =>$value->code,

                        ":referencia"=>$value->reference,

                        ":data_vencimento"=>$value->dueDate,

                        ":valor"=>$valor,

                        ":linkdownload"=>$value->installmentLink,

                        ":barcodeNumber"=>$value->billetDetails->barcodeNumber,

                        ":status_boleto"=>1,

                        ":id_atleta"=>$id

                    ));



                    if($results === 0) return $error = Atleta::setError();



                    return $results;



                    // $_SESSION[Atleta::SUCCESSCADASTRO];



                } catch(Exception $e){

                    throw new Exception("Não foi possível salvar o boleto", 1);

                    return $false;  

                }

        

                 

           



        }



    }

    

    public static function segundaVia($cpf, $data_nascimento){

        Atleta::clearAtletaError();

        $sql = new Sql();



        $results = $sql->select("SELECT * FROM tb_curso WHERE cpf = :CPF", array(

            ":CPF"=>$cpf

        ));



        if (count($results) === 0){

            throw new \Exception("CPF não encontrado");    

            // return null;

        }

        $data = $results[0];



        if($data_nascimento === $data['datanascimento']){

            $resultado = $sql->select("SELECT * FROM tb_curso a INNER JOIN tb_boleto_curso b USING(id_atleta) WHERE cpf = :cpf AND status_boleto = 1 ORDER BY data_vencimento ASC", array(

            ":cpf"=>$data['cpf']

            ));

            return $resultado;

        } else {

            throw new \Exception("Data de Nascimento não encontrada");

            // return null;

        }

    }



    

    public static function editAtleta($dados){



        // var_dump($dados);

        $sql = new Sql();



        $results = $sql->select('CALL sp_boleto_update(:nome_atleta, :email, :cpf, :telefone, :datanascimento, :sexo, :cep, :rua, :complemento, :num, :bairro, :cidade, :uf, :academia, :professor, :id_atleta)', array(

            ":nome_atleta"=>$dados['nome_atleta'],

            ":email"=>$dados['email'],

            ":cpf"=>$dados['cpf'],

            ":telefone"=>$dados['telefone'],

            ":datanascimento"=>$dados['datanascimento'],

            ":sexo"=>$dados['sexo'],

            ":cep"=>$dados['cep'],

            ":rua"=>$dados['rua'],

            ":complemento"=>$dados['complemento'],

            ":num"=>$dados['num'],

            ":bairro"=>$dados['bairro'],

            ":cidade"=>$dados['cidade'],

            ":uf"=>$dados['uf'],

            ":academia"=>$dados['academia'],

            ":professor"=>$dados['professor'],

            ":id_atleta"=>$dados['id_atleta']

        ));



        if($results === 0) return $error = Atleta::setError();



        return $results;



    }



    

    // public static function dadosBoleto(){

    //     $pagina = "https://sandbox.boletobancario.com/boletofacil/integration/api/v1/fetch-payment-details";



    //     $ch = curl_init();



    //     $postfields = array(

    //         'token' => '8781FD0ACFE163B8BCEFE1589540343EFE6C21D165E291D770B0DF7EB876B8B8',

    //     );



    //     curl_setopt($ch, CURLOPT_URL, $pagina);

    //     curl_setopt($ch, CURLOPT_POST, true);

    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);

    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



    //     $retorno = curl_exec($ch);



    //     curl_close($ch);



    //     if($retorno === 0) return $error = Atleta::setError();

    // }   

   



    ######################################### ERROS ###################################################



    public static function setError($msg){

       

        $_SESSION[Atleta::ERROR] = $msg;

        $_SESSION[Atleta::ERRORBOLETO] = $msg;

        

        

    }



    public static function getError(){

        

        $msg = (isset($_SESSION[Atleta::ERROR]) && $_SESSION[Atleta::ERROR]) ? $_SESSION[Atleta::ERROR] : '';

        $msg = (isset($_SESSION[Atleta::ERRORBOLETO]) && $_SESSION[Atleta::ERRORBOLETO]) ? $_SESSION[Atleta::ERRORBOLETO] : '';



        Atleta::clearError();



        return $msg;

      



    }



    public static function clearError(){

        

        $_SESSION[Atleta::ERROR] = NULL;

        $_SESSION[Atleta::ERRORBOLETO] = NULL;

       

        

        

    }



    ######################################## SUCCESS ####################################################

    public static function setSuccess($dados = array()){

        

        $_SESSION[Atleta::SUCCESS] = $dados;

    

        // $_SESSION[Atleta::SUCCESSBOLETO] = $title;

        // $_SESSION[Atleta::SUCCESSBOLETO] = $info;

    }



    public static function getSuccess(){

        

        $msg = (isset($_SESSION[Atleta::SUCCESS]) && $_SESSION[Atleta::SUCCESS]) ? $_SESSION[Atleta::SUCCESS] : '';

        

        Atleta::clearError();



        return $msg;



        



    }



    public static function clearSuccess(){

        

        $_SESSION[Atleta::SUCCESS] = NULL;

        $_SESSION[Atleta::SUCCESSBOLETO] = NULL;

    }





    public static function setAtletaSuccess($dados = array()){

        $_SESSION[Atleta::SUCCESSCADASTRO] = $dados;

    } 



    public static function getAtletaSuccess(){

        $msg = (isset($_SESSION[Atleta::SUCCESSCADASTRO]) && $_SESSION[Atleta::SUCCESSCADASTRO]) ? $_SESSION[Atleta::SUCCESSCADASTRO] : '';

        // Atleta::clearAtletaSuccess();

        return $msg;

    }



    public static function clearAtletaSuccess(){

        

        $_SESSION[Atleta::SUCCESSCADASTRO] = NULL;

       

    }





    public static function setAtletaError($dados = array()){

        $_SESSION[Atleta::ERRORCADASTRO] = $dados;

    } 



    public static function getAtletaError(){

        $msg = (isset($_SESSION[Atleta::ERRORCADASTRO]) && $_SESSION[Atleta::ERRORCADASTRO]) ? $_SESSION[Atleta::ERRORCADASTRO] : '';

        // Atleta::clearAtletaError();

        return $msg;

    }



    public static function clearAtletaError(){

        

        $_SESSION[Atleta::ERRORCADASTRO] = NULL;

       

    }



    





}









   







?>
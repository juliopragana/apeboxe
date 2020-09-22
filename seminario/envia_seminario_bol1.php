<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<?

require("conectar.php"); 
// exibindo os dados


if ($_POST){
   $nome 	= $_POST['nome'];
    $email	= $_POST['email'];
   $telefone	= preg_replace("/[^a-zA-Z0-9\s]/","", $_POST['telefone']);
    $nascimento = $_POST['nascimento'];    $endereco = $_POST['endereco'];
     $sexo = $_POST['sexo'];
  $cpf = $_POST['cpf'];
    $equipe = $_POST['equipe'];
    $categoria = $_POST['categoria'];
    $faixa = $_POST['faixa'];
    $peso 	= $_POST['peso'];
    $datacadastro = $_POST['datacadastro'];
    $nossonumero = $_POST['nossonumero'];
   $status 	= $_POST['status'];
  echo $abs 	= $_POST['abs'];
echo $statusboleto 	= $_POST['statusboleto'];


if (!($nome) || !($email)|| !($telefone)){
	print "Preencha todos os campos!"; exit();
}	

//IF PRA GERA OS VALOR REAL

	  
        echo $inserir2 = mysql_query("INSERT INTO cad_inscritos (nome,email,telefone,nascimento,endereco,sexo,equipe,datacadastro,status,valor,cpf,statusboleto)VALUES (UPPER('$_POST[nome]'),lower('$_POST[email]'),'$telefone','$_POST[nascimento]','$_POST[endereco]','$_POST[sexo]','$_POST[equipe]','$_POST[datacadastro]','$_POST[status]',300,'$_POST[cpf]','$_POST[statusboleto]')");
        
   
  //$ds = printf(mysql_insert_id());
  
//echo mysql_insert_id();
  $ultimo_id = mysql_insert_id(); 
      

  // echo <center>Seu numero de inscricao: $ds</center>;  

       if($inserir2) {
	//print "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\"> alert (\"Cadastro Realizado  mysql_insert_id() !\")</SCRIPT>
	//<SCRIPT language=\"JavaScript\">window.location.href=\"boleto.php?id=$email\";</SCRIPT>";
 echo '<font face="Verdana" size="8"><center>Seu número de inscrição é<p><p><p><p>',$ultimo_id;
 echo '<font face="Verdana" size="5"><center><b>
 <br><br>
AGUARDE VOCÊ SERA REDIRECIONADO A TELA DE PAGAMENTO!
<br><br>
<br><br>

<br><br>


<br><br>
<br><br>

</b><meta http-equiv="REFRESH" content="0;url=./pagamento/index_p1.php?id='.$ultimo_id.'">';

}else {
	print "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\"> alert (\"Cadastro não Realizado!\")</SCRIPT><SCRIPT language=\"JavaScript\">window.location.href=\"http://campfacil.com.br\";</SCRIPT>";
}
     }


?>
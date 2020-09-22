<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("SOLICITAÇÃO EFETUADO, AGUARDE!")</SCRIPT>

<?
//require("preso.php");
require("conectar.php"); 
// exibindo os dados
//$id = addslashes($_GET['id']);

if ($_POST){
   $nome 	= $_POST['nome'];
  echo  $email	= $_POST['email'];
    $telefone	= $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
        $sexo = $_POST['sexo'];

    $equipe = $_POST['equipe'];
    $categoria = $_POST['categoria'];
    $faixa = $_POST['faixa'];
    $peso 	= $_POST['peso'];
    $datacadastro = $_POST['datacadastro'];
    $nossonumero = $_POST['nossonumero'];
   $status 	= $_POST['status'];

if (!($nome) || !($email)|| !($telefone)){
	print "Preencha todos os campos!"; exit();
}	

if ( $categoria == 'JUVENIL' ){
  
$mensagem = '50.00';

} elseif ( $categoria == 'PRE MIRIM' ) {

 $mensagem = '35.00';

} elseif ( $categoria == 'MIRIM' ) {
 
 $mensagem = '35.00';

} elseif ( $categoria == 'INFANTIL' ) {
 
 $mensagem = '35.00';
}
 elseif ( $categoria == 'INFANTO JUVENIL' ) {

  $mensagem = '35.00';
  
} elseif ( $categoria == 'ADULTO' ) {

  $mensagem = '0';

} else {

  $mensagem = '000';

}
	  
         $inserir2 = mysql_query("INSERT INTO cad_inscritos (nome,email,telefone,nascimento,sexo,equipe,categoria,faixa,peso,datacadastro,status,valor)VALUES (UPPER('$_POST[nome]'),'$_POST[email]','$_POST[telefone]','$_POST[nascimento]','$_POST[sexo]','$_POST[equipe]','$_POST[categoria]','$_POST[faixa]','$_POST[peso]','$_POST[datacadastro]','$_POST[status]','$mensagem')");
        
   
  //$ds = printf(mysql_insert_id());
  
//echo mysql_insert_id();

      

  // echo <center>Seu numero de inscricao: $ds</center>;  

       if($inserir2) {
	//print "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\"> alert (\"Cadastro Realizado  mysql_insert_id() !\")</SCRIPT>
	//<SCRIPT language=\"JavaScript\">window.location.href=\"boleto.php?id=$email\";</SCRIPT>";
$idd = mysql_insert_id(); 
 echo '<font face="Verdana" size="7"><center>Seu número de inscrição é<p><p><p><p>',  mysql_insert_id();
 echo "<font face=\"Verdana\" size=\"3\"><center><b>

<br><br>
Anexar o comprovante de pagamento no formulario abaixo salvar em PDF OU IMAGENS <br><br>

</b><meta http-equiv=\"REFRESH\" content=\"03;url=http://campfacil.com.br/pagamento/altera_cadastro.php?email=$email&id=$idd\">";

}else {
	print "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\"> alert (\"Cadastro não Realizado!\")</SCRIPT><SCRIPT language=\"JavaScript\">window.location.href=\"http://campfacil.com.br/eventos/4_copa_kids\";</SCRIPT>";
}
     }


?>


<?php



include("conectar.php");

$nome = $linha['nome'];

$cpf = $linha['cpf'];

$operacao = $linha['operacao'];


$string = $nome;

$nova   = str_replace(' ', '+', $string);


$id = addslashes($_GET['id']);

$email = addslashes($_GET['email']);



$sql = "SELECT * FROM cad_inscritos WHERE id = '$id' ";

$resultado = mysql_query($sql)

or die ("Não foi possível realizar a consulta.");





while($linha=mysql_fetch_array($resultado)){





$valor = $linha['valor'];

//$valor = '80.00';

//$arquivo = "https://sandbox.boletobancario.com/boletofacil/integration/api/v1/issue-charge?token=4F5CA4D331F8AB2ADD4F0A571B8229E5130CF03F06D94697&description=COPA$id&amount=$valor&payerName=$nova&payerCpfCnpj=$cpf';



 $arquivo = "https://www.boletobancario.com/boletofacil/integration/api/v1/issue-charge?token=9CACD01255931226FB9A0ABFA8D2576CFF0B15B83F99D5169F09854243919A6F&description=SEMINARIO+2019+$id&reference=$id&dueDate=15/03/2019&amount=$valor&payerName=$nova+-$id&payerCpfCnpj=$cpf';





";



$info = file_get_contents($arquivo);



$lendo = json_decode($info);



foreach($lendo->data->charges as $campo){

//echo "<b>codigo:</b> ".$campo->code;

//echo "<br /><b>link:</b> "<input .$campo->link;

echo "<input name='link' type='hidden' value='$campo->link'>";

echo "<input name='link' type='hidden' value='$campo->link'>";



}











}



?>
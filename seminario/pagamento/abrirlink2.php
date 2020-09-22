<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("APERTE O BOTAO NO TECALDO (CTRL + P) PARA IMPRIMIR!!!! APERTE OK!")</SCRIPT> 

<?php 

include("conectar.php");
$id = addslashes($_GET['id']);
$email = addslashes($_GET['email']);

$sql = "SELECT * FROM cad_inscritos WHERE id = '$id' and email ='$email' and statusboleto='1'";
$resultado = mysql_query($sql)
 or die ("Não foi possível realizar a consulta.");

$count = mysql_num_rows($resultado);
// conta quantos registros encontrados com a nossa especificação
if ($count== 0) {
    //echo "<meta http-equiv=\"REFRESH\" content=\"03;url=http://campfacil.com.br/pagamento_curso/abrirlink.php?email=$email&id=$id\">";
} else {
    // senão
    if ($count == 1) {
        echo "";
    }
    // se houver um resultado diz que existe um resultado
    if ($count > 1) {
        echo "$count resultados encontrados!";
    }
while($linha=mysql_fetch_array($resultado)){


?>
<?php 

$link = $linha['link'];
echo "<meta http-equiv=\"REFRESH\" content=\"00;url=$link\">";  


?>

<?php
}

}
?>



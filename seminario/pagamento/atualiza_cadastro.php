<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<?php


require("conectar.php");

$id = $_GET['id'];
$email = $_GET['email'];
 $nome = $_GET['nome'];


?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

require("conectar.php"); 

$id			       = $_GET['id']; 
              		
$op1				= $_GET['op1'];
$cpf				= $_GET['cpf'];


 $query = "update cad_inscritos SET 		
				cpf = '$cpf',statusboleto ='0'
                                
                                 

                             where id = '$id'";
$rs = mysql_query($query);

?>
<!--<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("")</SCRIPT>-->
<?php echo "<meta http-equiv=\"REFRESH\" content=\"00;url=index_p2.php?email=$email&id=$id\">"; ?>

</br>
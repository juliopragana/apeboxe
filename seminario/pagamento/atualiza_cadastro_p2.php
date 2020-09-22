<?php


require("conectar.php");

$id = $_GET['id'];
$email = $_GET['email'];


?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

require("conectar.php"); 

 $id			       = $_GET['id']; 
              		
 $link				= $_GET['link'];

 $query = "update cad_inscritos SET 		
				link = '$link',statusboleto ='1'
                                
                                 

                             where id = '$id'";
$rs = mysql_query($query);

?>
<?php echo "<meta http-equiv=\"REFRESH\" content=\"00;url=$link\">"; ?>

</br>
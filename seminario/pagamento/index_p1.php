    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="./dist/css/bootstrapValidator.css"/>

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->

    <script type="text/javascript" src="./vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./dist/js/bootstrapValidator.js"></script>
	
	<script>
		function formatar(mascara, documento){
			var i = documento.value.length;
			var saida = mascara.substring(0,1);
			var texto = mascara.substring(i)
  
			if (texto.substring(0,1) != saida){
				documento.value += texto.substring(0,1);
			}  
		}
	</script>
<br><center>
<b>
1) -<font color=GREEN><b>CPF VALIDO OBRIGATORIO</b>-(APENAS NUMEROS SEM PONTOS OU TRANÇOS)</font> 
<br><button type="button" class="btn btn-danger">O VALOR DE R$ 2,00 É ACRESCENTADO AO BOLETO</button><br>
<br> QUALQUER DÚVIDA ENVIAR ZAP-ZAP PARA 81.99899.1354
    </center></b>



<?php 

include("conectar.php");
$id = addslashes($_GET['id']);
$email = addslashes($_GET['email']);

$sql = "SELECT * FROM cad_inscritos WHERE id = '$id' and statusboleto='0' and status = '0'";
$resultado = mysql_query($sql)
 or die ("Não foi possível realizar a consulta.");

$count = mysql_num_rows($resultado);
// conta quantos registros encontrados com a nossa especificação
if ($count== 0) {
    echo "<meta http-equiv=\"REFRESH\" content=\"00;url=abrirlink.php?email=$email&id=$id\">";
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

	
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />


<script type="text/javascript">
function validaForm(){
           d = document.cadastro;
           //validar nome
if (d.cpf.value == ""){
                     alert("O campo cpf deve ser preenchido!");
                     d.cpf.style.backgroundColor="#FFFF00";
                     d.cpf.style.color="#000000";
                    d.cpf.focus();
                     return false; 
           }

document.cadastro.submit();
         
}
</script>
<center>
<?php echo $linha['nome'] ?>
			
<br><?php echo $linha['email'] ?>

<br>SUA INSCRICAO:<?php echo $linha['id'] ?><br>
</center>
<body>
<form action="atualiza_cadastro.php" method="get" name="cadastro" class="form-horizontal"  id="cpf_form">
  
		
		  <div class="form-group">
		  <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
			<input type="text" class="form-control" name="cpf" maxlength="11"  value="<?php echo $linha['cpf'] ?>" placeholder="INFORME SEU CPF APENAS NUMEROS" />
	<br>
	
</div></div>
				

			<input name="id" type="hidden" value="<?php echo $linha['id'] ?>" />
<input name="email" type="hidden" value="<?php echo $linha['email'] ?>" />
<label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		 <input  type="submit" value="CONTINUAR >>"  class="btn btn-primary"/>
</div>

</form> 




<?php
}

}
?>
<script>
$(document).ready(function() {
   
    $('#cpf_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cpf: {
                validators: {
                    callback: {
                        message: 'INFORME APENAS NUMEROS SEM PONTO OU TRAÇO',
                        callback: function(value) {
													 
							cpf = value.replace(/[^\d]+/g,'');    
							if(cpf == '') return false; 
							    
							if (cpf.length != 11) return false;
							
							// testa se os 11 digitos são iguais, que não pode.
							var valido = 0; 
							for (i=1; i < 11; i++){
								if (cpf.charAt(0)!=cpf.charAt(i)) valido =1;
							}
							if (valido==0) return false;
							      
							  
							aux = 0;    
							for (i=0; i < 9; i ++)       
								aux += parseInt(cpf.charAt(i)) * (10 - i);  
								check = 11 - (aux % 11);  
								if (check == 10 || check == 11)     
									check = 0;    
								if (check != parseInt(cpf.charAt(9)))     
									return false;       
							  
							aux = 0;    
							for (i = 0; i < 10; i ++)        
								aux += parseInt(cpf.charAt(i)) * (11 - i);  
							check = 11 - (aux % 11);  
							if (check == 10 || check == 11) 
								check = 0;    
							if (check != parseInt(cpf.charAt(10)))
								return false;       
							return true; 
						
						 
                        }
                   }
                }
           }
        }
    });
});
</script>
</body>




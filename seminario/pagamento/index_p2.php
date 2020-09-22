<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="viewport" content="initial-scale=1.0" />
<link href="bootstrap.min.css" rel="stylesheet">
<br><center>
<button type="button" class="btn btn-danger">LEIA COM ATENÇÃO</button><br>
<b>
1) AGUARDE A PAGINA CARREGAR!<br>
2) CLICAR EM FINALIZAR / SALVAR .
<br><br> QUALQUER DÚVIDA ENVIAR ZAP-ZAP PARA 81.998.99.1354 INFORMANDO SUA INSCRIÇÃO/E-MAIL E A FOTO DO ERRO!
    </center></b>
<br>
<?php 

include("conectar.php");
$id = addslashes($_GET['id']);
$email = addslashes($_GET['email']);

$sql = "SELECT * FROM cad_inscritos WHERE id = '$id'";
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");


while($linha=mysql_fetch_array($resultado)){

?>

	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />



<br><br>

<form action="atualiza_cadastro_p2.php" method="get" name="cadastro" class="form-horizontal">
  <div class="form-group">
<label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
			<input maxlength="25" name="nome" size="60" type="text" class="form-control" disabled="disabled" placeholder="Nome"  style="text-transform:uppercase" value="<?php echo $linha['nome'] ?>" />
			
			</div></div>
			  <div class="form-group">
			 <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		<input name="email" size="30" type="text" class="form-control" disabled="disabled" placeholder="E-mail" value="<?php echo $linha['email'] ?>" />
		</div></div>
		
		  <div class="form-group">
		  <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		<input name="cpf" type="text" id="cpf" class="form-control" disabled="disabled" placeholder="<?php echo $linha['cpf'] ?>"/>
		</div></div>
		
			
			<input name="id" type="hidden" value="<?php echo $linha['id'] ?>" />
<input name="email" type="hidden" value="<?php echo $linha['email'] ?>" />
<?php   require("indexpag2.php"); ?>
<label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		 <input id="button" name="submit" onclick="return validaForm()" type="submit" value="FINALIZAR / SALVAR >>"  class="btn btn-primary"/>
</div>
			
		
<br><br>

</form> </a>
<br><br>
<center>

</center>
<script>
jQuery(function($){
       $("#campoNascimento").mask("99/99/9999");
       $("#campotelefone").mask("(99) 99999-9999");
       $("#campoSenha").mask("***-****");
});
</script>
<br>

<br><br>



<?php
 

}

?>
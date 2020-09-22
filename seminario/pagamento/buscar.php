<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

<title>PAGAMENTO BOLETO CAMPFACIL.COM.BR</title>
</head>

<body>

<br><center>
<button type="button" class="btn btn-danger">LEIA COM ATENÇÃO</button><br>
<b>1) - INFORME AS INSCRIÇÕES DOS SEUS ALUNOS.<br><font size="3" color="red">EX.:( 1,236,300,301 )</FONT> DESSA FORMA COM VIRGULA E INSERINDO AS INCRIÇÕES CLIQUE NO BOTÃO BUSCAR INSCRIÇÕES 
 
<br><br><font size="2"> QUALQUER DÚVIDA ENVIAR ZAP-ZAP PARA 81.98856-0527 INFORMANDO SUA INSCRIÇÃO/E-MAIL E A FOTO DO ERRO!</font>
    </b>
<center><br>
<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" class="form-horizontal">
    <div class="form-group">
		  <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
    <input type="text" name="palavra" placeholder="Informe as inscrições" class="form-control"  />
   
    </div></div> 
				  
			    <input type="submit" value="Buscar Inscrições" class="btn btn-primary" id="button"/>
  
</form>

<?php
// Conexão com o banco de dados
$conn = @mysql_connect("localhost", "campfa_gft", "123456@#Aa") or die("Não foi possível a conexão com o Banco");
// Selecionando banco
$db = @mysql_select_db("campfa_agreste", $conn) or die("Não foi possível selecionar o Banco");

// Recuperamos a ação enviada pelo formulário
$a = $_GET['a'];

// Verificamos se a ação é de busca
if ($a == "buscar") {

	// Pegamos a palavra
	$palavra = $_POST['palavra'];

	// Verificamos no banco de dados produtos equivalente a palavra digitada
	$sql = mysql_query("SELECT * FROM cad_inscritos WHERE id in (".$palavra.") ORDER BY id");

	// Descobrimos o total de registros encontrados
	$numRegistros = mysql_num_rows($sql);

	// Se houver pelo menos um registro, exibe-o
	if ($numRegistros != 0) {
		// Exibe os produtos e seus respectivos preços
		while ($produto = mysql_fetch_object($sql)) {
			echo "<br>".$produto->id ." - ".  $produto->nome ." - ".$produto->equipe . " - R$ ".$produto->valor." <br/>";
			

			
		}
	// Se não houver registros
	} else {
		echo "Nenhum atleta encontrado ".$palavra."";
	}
}


if ($a == "buscar") {

	// Pegamos a palavra
	$palavra = $_POST['palavra'];

	// Verificamos no banco de dados produtos equivalente a palavra digitada
	$sql2 = mysql_query("SELECT sum(valor2) as soma FROM cad_inscritos WHERE id in (".$palavra.") ORDER BY id");

	// Descobrimos o total de registros encontrados
	$numRegistros = mysql_num_rows($sql2);

	// Se houver pelo menos um registro, exibe-o
	if ($numRegistros != 0) {
		// Exibe os produtos e seus respectivos preços
		while ($produto = mysql_fetch_object($sql2)) {
			echo "<form method ='get' action='atualiza_cadastro_v.php'><input type=hidden value=".$produto->soma." ><br/>
			<div class='form-group'>
		  <label class='col-sm-4 control-label'></label>
			  <div class='col-sm-4'>
			  <input type=text name=cpf class='form-control' placeholder='Informe o CPF'>
			  </div></div><br>
			  <div class='form-group'>
		  <label class='col-sm-4 control-label'></label>
			  <div class='col-sm-4'>
			  <input type=text name=telefone class='form-control' placeholder='Informe o Telefone' >
			  </div></div><br>
			  <div class='form-group'>
		  <label class='col-sm-4 control-label'></label>
			  <div class='col-sm-4'><input type=text name=nome class='form-control' placeholder='Informe seu NOME'>
			  </div></div><br>
			  <input type=hidden name=inscricao value='$palavra'>	
			  <div class='form-group'>	  
<label class='col-sm-4 control-label'></label>
			  <div class='col-sm-4'>
			  <input type=submit value='Confirmar Geracao do Boleto' Class='btn btn-primary'><br></div></div>
					
";

	$soma2 = intval($produto->soma) ;
				require("indexpag_v.php"); 
				echo '</form>';

		}
	// Se não houver registros
	} else {
		echo "Nenhum atleta encontrado ".$palavra."";
	}
}






?>

</body>
</center>
</html>
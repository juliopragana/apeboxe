
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
 <meta charset="utf-8">

	<title></title>
</head>



<link href="http://campfacil.com.br/eventos/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="js/style.css" />
<style>
img{
 max-width:100%;
 height:auto;
}
</style>

<style type="text/css" media="all">
#box-toggle {
	width:620px;
	margin:0 auto;
	
	}
#box-toggle .tgl {margin-bottom:30px;}
#box-toggle span {
	display:block;
	cursor:pointer;
	font-weight:bold;
	font-size:14px;
	color:#4682B4; 
	margin-top:15px;
	}


.myButton {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Verdana;
	font-size:14px;
	padding:14px 11px;
	text-decoration:none;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>

<style type="text/css">
            /* i like padding - you can ignore this css. see the actual css / less files in the repository for styling the gallery navigation */
			div.row > div > div.row {
				margin-bottom: 15px;
			}

			body {
				padding-bottom: 50px;
			}

			div.top-header {
				margin-bottom:100px;
			}

			h3.page-header {
				margin-top: 50px;
			}

			figure {
				position: relative;
			}

			figure figcaption {
				font-size: 22px;
				color: #fff;
				text-decoration: none;
				bottom: 10px;
				right: 20px;
				position: absolute;
				background-color: #000;
			}
			code {
				white-space: pre-wrap;       /* css-3 */
				white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
				white-space: -pre-wrap;      /* Opera 4-6 */
				white-space: -o-pre-wrap;    /* Opera 7 */
				word-wrap: break-word;       /* Internet Explorer 5.5+ */
			}
        </style>
<script type="text/javascript">
			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						always_show_close: true
					});
				});

			});
		</script>
 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
        
<script src="js/jquery-1.5.2.min.js"></script>
<script src="js/jquery.maskedinput-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/style.css"></script>
<script type="text/javascript">
 
function validaForm(){
           d = document.cadastro;
           //validar nome
           if (d.nome.value == ""){
                     alert("O campo NOME  deve ser preenchido!");
                     d.nome.style.backgroundColor="#e1f7b2";
                     d.nome.style.color="#000000";
                    d.nome.focus();
                     return false;
           }
           //validar user
          
          
          
            if (d.email.value == ""){
                   alert("O campo EMAIL  deve ser preenchido!");
                   d.email.style.backgroundColor="#e1f7b2";
                   d.email.style.color="#000000";
                   d.email.focus();
                   return false;
         }
         //validar email(verificao de endereco eletrônico)
         parte1 = d.email.value.indexOf("@");
         parte3 = d.email.value.length;
         if (!(parte1 >= 3 && parte3 >= 9)) {
                   alert ("O campo EMAIL  deve ser conter um endereco eletronico!");
                   d.email.style.backgroundColor="#e1f7b2";
                   d.email.style.color="#000000";
                   d.email.focus();
                    return false;
                    
         }if (d.telefone.value == ""){
                     alert("O campo TELEFONE deve ser preenchido!");
                     d.telefone.style.backgroundColor="#e1f7b2";
                     d.telefone.style.color="#000000";
                 
                     d.telefone.focus();
               return false;
           
           
}if (d.cpf.value == ""){
                     alert("O campo CPF deve ser preenchido!");
                     d.cpf.style.backgroundColor="#e1f7b2";
                     d.cpf.style.color="#000000";
                    
                     d.cpf.focus();
                      return false;
           }
           
           
              if (d.sexo.value == ""){
                     alert("O campo SEXO deve ser preenchido!");
                     d.sexo.style.backgroundColor="#e1f7b2";
                     d.sexo.style.color="#000000";
                    d.sexo.focus();
                     return false;
           }
          
         
           
             if (d.equipe.value == ""){
                     alert("O campo EQUIPE deve ser preenchido!");
                     d.equipe.style.backgroundColor="#e1f7b2";
                     d.equipe.style.color="#000000";
                    d.equipe.focus();
                     return false;
           }
        
        
           if (d.combo1.value == ""){
                     alert("O campo IDADE deve ser preenchido!");
                     d.combo1.style.backgroundColor="#e1f7b2";
                     d.combo1.style.color="#000000";
                    d.combo1.focus();
                     return false;
           }
        
             if (d.combo2.value == ""){
                     alert("O campo CATEGORIA deve ser preenchido!");
                     d.combo2.style.backgroundColor="#e1f7b2";
                     d.combo2.style.color="#000000";
                    d.combo2.focus();
                     return false;
           }
          if (d.combo3.value == ""){
                     alert("O campo FAIXA deve ser preenchido!");
                     d.combo3.style.backgroundColor="#e1f7b2";
                     d.combo3.style.color="#000000";
                    d.combo3.focus();
                     return false;
           }
        
          if (d.peso.value == ""){
                     alert("O campo PESO deve ser preenchido!");
                     d.peso.style.backgroundColor="#e1f7b2";
                     d.peso.style.color="#000000";
                    d.peso.focus();
                     return false; 
           }
           
             if (d.abs.value == ""){
                     alert("VAI PARTICIPAR DO ABSOLUTO INFORME (SIM OU NAO)");
                     d.abs.style.backgroundColor="#f70000";
                     d.abs.style.color="#000000";
                    d.abs.focus();
                     return false; 
           }
           
document.cadastro.submit();
         
}
</script>





<body align='center'>

<center>
<br><br>
</center>
 <header>
      <h1 class="float-l">1º CURSO DE FORMAÇÃO TÉCNICA</h1>
      
      <input type="checkbox" id="control-nav" />
      <label for="control-nav" class="control-nav"></label>
      <label for="control-nav" class="control-nav-close"></label>

      <nav class="float-r">
        <ul class="list-auto">
         
          <li><a href="./pagamento" target='_blank'>PAGAMENTO</a></li>
        
         
         
    

        </ul>
      </nav>
    </header>
<br>
  

<center> 
<div class="container-fluid">

<img  src="capa.jpeg"  height="600" width="500" class="img-responsive" >


   <font color="black"> 
<form action="envia_seminario_bol1.php" method="post" name="cadastro" class="form-horizontal">
  <div class="form-group">
<label class="col-sm-4 control-label">INFORME APENAS NOME E SOBRENOME <BR>EX.: JOAO SILVA</label>
			  <div class="col-sm-4">
			<input maxlength="20" name="nome" size="60" type="text" class="form-control" placeholder="APENAS NOME E SOBRENOME"  style="text-transform:uppercase"  />  
			
			</div></div>
			 <div class="form-group">
<label class="col-sm-4 control-label"><BR></label>
			  <div class="col-sm-4">
			<input maxlength="100" name="endereco" size="60" type="text" class="form-control" placeholder="INFORME ENDEREÇO"  style="text-transform:uppercase"  />  
			
			</div></div>
			  <div class="form-group">
			 <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		<input name="email" size="30" type="text" class="form-control" placeholder="E-mail" />
		</div></div>
		
				  <div class="form-group">
				  <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		<input name="telefone" size="11" type="text" id="campotelefone" class="form-control" placeholder="INFORME O CELULAR" />
		</div></div>
		  <div class="form-group">
				  <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		<input name="nascimento" size="11" type="text" id="campoNascimento" class="form-control" placeholder="NASCIMENTO" />
		</div></div>
<div class="form-group">
				  <label class="col-sm-4 control-label"><font color="black">CPF</label>
			  <div class="col-sm-4">
		<input name="cpf" maxlength="11" size="11" type="text" id="cpf" class="form-control" placeholder="CPF" required />
		</div></div>
	
		<div class="form-group">
			  <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
			<select id="sexo" name="sexo" class="form-control">
			    <option default="" selected="selected" value="">Selecione o SEXO</option>
			<option value="FEMININO">FEMININO</option>
			<option value="MASCULINO">MASCULINO</option> </select>
			</div></div>
		
		  <div class="form-group">
		  <label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
	<!--	<select id="equipe" name="equipe" class="form-control"><option default="" selected="selected" value="">Selecione a equipe</option>
		<option value='ACADEMIA NEW CHAMPIONS TEAM'>ACADEMIA NEW CHAMPIONS TEAM</option></option>
<option value='FORJA DE CAMPEOES'>FORJA DE CAMPEÕES</option>
<option value='BOXE REC'>BOXE REC</option>
<option value='SPARTA GYM'>SPARTA GYM</option>
<option value='ACADEMIA ASSIRIOS'>ACADEMIA ASSIRIOS</option>
<option value='KINGS BOXE'>KINGS BOXE</option>
<option value='ACADEMIA BLACK TIGER'>ACADEMIA BLACK TIGER</option>
<option value='UNIDOS BOXE TEAM'>UNIDOS BOXE TEAM </option>
<option value='ISAC ABREU'>ISAC ABREU</option>
<option value='GEORGE ANDERSON BOXE CENTER'>GEORGE ANDERSON BOXE CENTER </option>
<option value='EQUIPE CAMARA'>EQUIPE CAMARA</option>
</select>-->

	<input maxlength="40" name="equipe" size="60" type="text" class="form-control" placeholder="NOME DA ACADEMIA"  style="text-transform:uppercase"  />  
			

		 </div>
		
		</div>	
	 
			
		

			<input name="datacadastro" type="hidden" value="<? echo date('d/m/Y H:m:s ')?>" />
	<input name="statusboleto" type="hidden" value="0" />
			
			<label class="col-sm-4 control-label"></label>
			  <div class="col-sm-4">
		 <input id="button" name="submit" onclick="return validaForm()" type="submit" value="FINALIZAR INSCRIÇÃO "  class="btn btn-primary"/>
</div>
		


</form> 
</div>


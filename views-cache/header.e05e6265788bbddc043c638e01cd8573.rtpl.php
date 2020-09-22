<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/res/css/theme.css" type="text/css">
  <link rel="stylesheet" href="/res/css/bootstrap.css">
  <script type="text/javascript" src="/res/js/jquery/jquery-3.3.1.min.js"> </script>
  <script type="text/javascript" src="/res/js/jquery/jquery.validate.min.js"></script>
  <script type="text/javascript" src="/res/js/jquery/additional-methods.min.js"></script>
  <script type="text/javascript" src="/res/js/localization/messages_pt_BR.js"></script>
  <script type="text/javascript" src="/res/js/valida/validaCampos.js"></script>
  <script type="text/javascript" src="/res/js/valida/validaCEP.js"></script>
  <script type="text/javascript" src="/res/js/notify/pnotify.custom.min.js"> </script>
  <script type="text/javascript" src="/res/js/notify/notify.js"></script>
  <link rel="stylesheet" href="/res/css/pnotify.custom.min.css">
  <title>APEBOXE - Cadastro de Atleta</title>
</head>

<body  style="	background-image: url(res/img/boxe.jpg);	background-position: center center;	background-size: 100%;	background-repeat: no-repeat; background-color: black; width: 100%; height: 100vh;" >
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid"> 
        <a class="navbar-brand d-none d-md-block text-light" href="/">
          <b><b> APEBOXE</b><br></b>
        </a><button class="navbar-toggler navbar-toggler-right border-0 text-white"  type="button" data-toggle="collapse" data-target="#navbar10"><i class="fa fa-bars" aria-hidden="true"></i></button>
        
        <div class="collapse navbar-collapse" id="navbar10">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item text-white"> <a class="nav-link text-light" href="#" data-target="#inscricao" data-toggle="modal"><i class="fa fa-users fa-fw"></i><b>&nbsp;Inscrições</b></a> </li>
          <li class="nav-item text-white"><a class="nav-link text-light" href="#" data-target="#segunda-via" data-toggle="modal"><i class="fa fa-fw fa-address-card"></i><b>&nbsp;Segunda via do Boleto</b></a></li>
          <li class="nav-item text-white"><a class="nav-link text-light" href="#"><i class="fa fa-fw fa-trophy"></i> <b>Competições</b></a></li>
          <li class="nav-item text-white"><a class="nav-link text-light" href="#"><i class="fa fa-fw fa-refresh"></i> <b>Renovação</b></a></li>
        </ul>
      </div>
    </div>
    
    
  </nav>
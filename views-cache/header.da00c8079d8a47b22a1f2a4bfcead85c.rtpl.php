<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Painel Administrativo APEBOXE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../res/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="/res/datatable/datatables.min.css"/>
  <script type="text/javascript" src="/res/js/jquery/jquery-3.3.1.min.js"> </script>
 
 
<script type="text/javascript" src="/res/datatable/datatables.min.js"></script>
  <script type="text/javascript" src="/res/js/jquery/jquery.validate.min.js"></script>
  <script type="text/javascript" src="/res/js/jquery/additional-methods.min.js"></script>
  <script type="text/javascript" src="/res/js/localization/messages_pt_BR.js"></script>
  <script type="text/javascript" src="/res/js/valida/validaCampos.js"></script>
  <script type="text/javascript" src="/res/js/valida/boletos.js"></script>
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../../res/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="../../res/admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-black sidebar-mini fixed sidebar-collapse">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>APE</b>BOXE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Alternar de Navegação</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você não recebeu nenhuma mensagem</li>
              <li>
                <!-- inner menu: contains the messages -->
                
                <!-- /.menu -->
              </li>
              <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Nenhum Notificação</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                
              </li>
              <!-- <li class="footer"><a href="#">View all</a></li> -->
            </ul>
          </li>
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar -->
              <img src="../../res/img/Logo.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Apeboxe</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../res/img/Logo.jpg" class="img-circle" alt="User Image">

                <p>
                 <small>Apeboxe</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/painel-curso/logout" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../res/img/Logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Apeboxe</p>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          

        </div>
      </div>

      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
         <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/painel-curso"><i class="fa fa-dashboard"></i> <span>Painel Inicial</span></a></li>
        <!-- <li><a href="/painel-curso/usuarios"><i class="fa fa-users"></i> <span>Usuários</span></a></li> -->
        <li class="active"><a href="/painel-curso/lista-alunos"><i class="fa fa-users" aria-hidden="true"></i><span>Lista de Alunos Matrículados</span></a></li>
        <li class="active"><a href="/painel-curso/boletos-cancelados"><i class="fa fa-meh-o" aria-hidden="true"></i><span>Boletos Cancelados</span></a></li>
        
       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

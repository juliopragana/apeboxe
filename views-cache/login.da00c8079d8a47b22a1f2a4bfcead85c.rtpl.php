<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - APEBOXE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/res/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/res/admin/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="	background-image: url(../../res/img/boxe.jpg);	background-position: center center;	background-size: 100%;	background-repeat: no-repeat; background-color: black; width: 100%; height: 100vh;" >
<div class="login-box">
  <div class="login-logo">
    <a href="/res/admin/index2.html"><b ><span style="color:antiquewhite">Admin</span></b><span style="color:cadetblue">APEBOXE</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      
    <p class="login-box-msg">Acesso ao sistema APEBOXE</p>

    <form action="/painel-curso/login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuário" name="usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" name="senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <?php if( $error != '' ){ ?>
      <div class="text-center" style="color:red">
        <p><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Lembre-me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <div style="text-align: center">
    <a style="text-align: right" href="#">Esqueceu a senha?</a><br>
    </div>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="/res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/res/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/res/admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

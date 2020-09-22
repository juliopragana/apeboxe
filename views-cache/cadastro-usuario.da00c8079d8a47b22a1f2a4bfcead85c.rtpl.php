<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastrar novo usuário
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/users">Usuários</a></li>
        <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
    
      <div class="row">
          <div class="col-md-12">
              <div class="box box-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Novo Usuário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="form-cadastro-usuario" action="/painel-curso/cadastrar-usuario" method="POST" enctype="multipart/form-data">

              
              <?php if( $error != '' ){ ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Erro</h4>
                <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
              </div>
              <?php } ?>
            
               <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome Completo</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o nome">
                  </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
                </div>
                <div class="form-group">
                  <label for="foto">Carregue sua foto</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
                </div>
                <div class="form-group">
                    <label for="senha">Confirmar Senha</label>
                    <input type="password" class="form-control" id="conf_senha" name="conf_senha" placeholder="Confirma a senha">
                  </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status_usuario" id="status_user" value="1"> Acesso de Administrador
                  </label>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Cadastrar</button>
              </div>
            </form>
          </div>
          </div>
      </div>
    
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
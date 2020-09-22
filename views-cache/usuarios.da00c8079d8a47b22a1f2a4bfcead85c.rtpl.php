<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Lista de Usuários
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="/admin/users">Usuários</a></li>
          </ol>
        </section>
        
        <!-- Main content -->
        <section class="content">
        
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-primary">
                    
                    <div class="box-header">
                      <a href="/painel-curso/cadastro-usuario" class="btn btn-success">Cadastrar Usuário</a>
                    </div>
                    <?php if( $success != '' ){ ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
                      Usuário Cadastrado com sucesso!
                    </div>
                    <?php } ?>
                    <div class="box-body no-padding">
                      <table id="example1" class="table table-striped">
                        <thead>
                          <tr>
                            <th>Nome Usuário</th>
                            <th>Usuário</th>
                            <th>e-mail</th>
                            <th>Imagem</th>
                            <th>Data de registro</th>
                            <th style="width: 140px">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                          <tr>
                            <td><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <?php $data = new DateTime($value1["data_registro"]); ?>
                            <td><img src="<?php echo htmlspecialchars( $value1["image"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="width: 40px"></td>
                            <td>  <?php echo date_format($data, 'd/m/Y H:i:s'); ?></td>
                            
                           
                            <td>
                              <a href="/admin/users/<?php echo htmlspecialchars( $value1["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                              <a href="/admin/users/<?php echo htmlspecialchars( $value1["id_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
              </div>
          </div>
        
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
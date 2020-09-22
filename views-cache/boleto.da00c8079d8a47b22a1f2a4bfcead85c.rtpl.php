<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel Inicial
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  
     <!-- Content Header (Page header) -->
     <section class="content">
      <div class="row bg-dark text-white">
          
        <div class="col-md-12 col-sm-12 col-xs-12">
          
            <div class="box box-default color-palette-box">
              <div class="box-header with-border text-center">
            <h1>Informações sobre o boleto</h1>
            </div>
            <?php $counter1=-1;  if( isset($dados) && ( is_array($dados) || $dados instanceof Traversable ) && sizeof($dados) ) foreach( $dados as $key1 => $value1 ){ $counter1++; ?>
            <div class="box-body">
                <h3><b>Dados do Atleta</b></h3>
                <h4> Nome: <?php echo htmlspecialchars( $value1["nome_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4> Cpf: <?php echo htmlspecialchars( $value1["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4> Email: <?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4> Telefone: <?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h3><b>Dados do Boleto</b></h3>
                <h4> Código do boleto: <?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4> Referência: <?php echo htmlspecialchars( $value1["referencia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4> Data de Vencimento: <?php echo htmlspecialchars( $value1["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4> Valor: R$<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>

                <a href="/painel-curso/boleto/aprovar" type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Aprovar Boleto</a>
                <a href="/painel-curso/boleto/reprovar" type="button" class="btn btn-danger ml-3 "><i class="fa fa-times" aria-hidden="true"></i> Reprovar Boleto</a> 
            </div>
            <?php } ?>
          </div>
        </div>
        </div>
  
  
  
  
        
      
      
        
        
          </section>  
  </div> 
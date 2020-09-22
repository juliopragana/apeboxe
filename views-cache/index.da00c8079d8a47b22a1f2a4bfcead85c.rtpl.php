<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Painel Inicial
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

   <!-- Content Header (Page header) -->
   <section class="content">
    <div class="row bg-dark text-white">
        
      <div class="col-md-12 col-sm-12 col-xs-12 text-center ">
        
          <div class="box box-default color-palette-box">
            <div class="box-header with-border">
          <h1>Dados sobre a inscrição do Curso de Aperfeiçoamento de Boxe</h1>
          </div>
          <div class="box-body">

              <!-- Info boxes -->
   <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12">
          <a href="painel-curso/lista-alunos" class="text-black">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
          
        
          <div class="info-box-content">
            <span class="info-box-text"><b>Qtd. Atletas Inscritos</b></span>
            <span class="info-box-text">Total </span>
            <span class="info-box-number"><?php echo htmlspecialchars( $qtdinsc, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text"><b>Qtd. Atletas com Boletos Pendentes</b></span>
            <span class="info-box-text">Total</span>
            <span class="info-box-number"><?php echo htmlspecialchars( $qtdpend, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
  
      <div class="col-md-3 col-sm-8 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text"><b>Qtd. Atletas com boletos pagos</b></span>
            <span class="info-box-text">Total</span>
            <span class="info-box-number"><?php echo htmlspecialchars( $qtdpago, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-3 col-sm-8 col-xs-12">
        <a href="#" class="btn text-black">
        <div class="info-box">
          <span class="info-box-icon bg-orange"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text"><b>Qtd. de boletos Cancelados</b></span>
            <span class="info-box-text">Total</span>
            <span class="info-box-number"><?php echo htmlspecialchars( $qtdcanc, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      
            </div>
          </div>
        </div>
      </div>
  </div>




  <!--  ############################ TABELA ########################### -->
 
    <div class="row">
      
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header bg-red ">
              <h3 class="box-title">Atletas com boletos pendentes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="lista-pendente" class="table table-hover" style="width: 100%">
                  <thead >
                      <tr>
                        <th>ID Atleta</th>
                        <th scope="col" class="bg-gray text-center">Nome Atleta</th>
                        <th scope="col" class="bg-gray text-center">CPF</th>
                        <th scope="col" class="bg-gray text-center">Email</th>
                        <th scope="col" class="bg-gray text-center">telefone</th>
                        <th scope="col" class="bg-blue text-center">Código Boleto</th>
                        <th scope="col" class="bg-blue text-center">Referencia</th>
                        <th scope="col" class="bg-blue text-center">Data Vencimento</th>
                        <th scope="col" class="bg-blue text-center">Valor</th>
                        <th scope="col" class="bg-gray text-center" style="width: 10%">Ação</th>
                     </tr>
                  </thead>
                  <tbody>
                    
                      <?php if( $listapend != NULL ){ ?>
                    <?php $counter1=-1;  if( isset($listapend) && ( is_array($listapend) || $listapend instanceof Traversable ) && sizeof($listapend) ) foreach( $listapend as $key1 => $value1 ){ $counter1++; ?>
                      <tr>
                        <td><?php echo htmlspecialchars( $value1["id_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["nome_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center"><?php echo htmlspecialchars( $value1["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center"><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center"><?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center"><?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center"><?php echo htmlspecialchars( $value1["referencia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center"><?php echo htmlspecialchars( $value1["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center" >R$<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td class="text-center" >
                            <!-- <a href="#" type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                          <!-- <a href="#" type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a> 
                          <a href="#" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a> -->
                          <button type="button" class="btn btn-success btn-aprovar" id="click"><i class="fa fa-check" aria-hidden="true"></i></button>
                          <button type="button" class="btn btn-danger btn-cancelar" id="click2"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <?php } ?>
                      <?php }else{ ?>
                      
                      <?php } ?>
                    
                  </tbody>
              </table>
            </div>
        </div>
   
    
    
      <div class="row">
        
        <div class="col-xs-12">
            <div class="box">
              <div class="box-header bg-green">
                <h1 class="box-title">Atletas com boleto pago</h1>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="lista-pago"  class="table table-hover" style="width: 100%">
                    
                    <thead class="bg-gray">
                        <tr>
                          <th>ID Atleta</th>
                          <th scope="col" class="bg-gray text-center">Nome Atleta</th>
                          <th scope="col" class="bg-gray text-center">CPF</th>
                          <th scope="col" class="bg-gray text-center">Email</th>
                          <th scope="col" class="bg-gray text-center">telefone</th>
                          <th scope="col" class="bg-blue text-center">Código Boleto</th>
                          <th scope="col" class="bg-blue text-center">Referencia</th>
                          <th scope="col" class="bg-blue text-center">Data Vencimento</th>
                          <th scope="col" class="bg-blue text-center">Valor</th>
                          
                         </tr>
                    </thead>
                    
                   
                    <tbody>
                        <?php if( $listapago == NULL ){ ?>
                        
                        <?php }else{ ?>      

                            <?php $counter1=-1;  if( isset($listapago) && ( is_array($listapago) || $listapago instanceof Traversable ) && sizeof($listapago) ) foreach( $listapago as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                              <td><?php echo htmlspecialchars( $value1["id_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["nome_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars( $value1["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars( $value1["referencia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td class="text-center"><?php echo htmlspecialchars( $value1["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td class="text-center" >R$<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <!-- <td class="text-center">
                                <a href="#" type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                                 <a href="#" type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a> 
                                <a href="#" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a> 
                               
                              </td> -->
                             
                            </tr>
                            <?php } ?>
                            
                              
                            <?php } ?>
                      
                    </tbody>
                   
                </table>
              </div>
          </div>
      
        </section>  
</div> 

<script>
    
    
</script>






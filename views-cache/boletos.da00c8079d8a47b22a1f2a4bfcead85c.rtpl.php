<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Boletos
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Painel Inicial</li>
            <li class="active">Boletos</li>
          </ol>
        </section>
      
         <!-- Content Header (Page header) -->
         <section class="content">
            
        <!--  ############################ TABELA ########################### -->
       
          <div class="row">


            <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                                <h3 class="box-title"> Boletos de <b><?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></b></h3>
                           
                          </div>
                          <div class="box-header bg-red ">
                                
                            <h3 class="box-title">Boletos Pendentes</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                                <div class="card">
                                        <div class="card-body">
                                          This is some text within a card body.
                                        </div>
                                      </div>
                                <?php $counter1=-1;  if( isset($boletospendentes) && ( is_array($boletospendentes) || $boletospendentes instanceof Traversable ) && sizeof($boletospendentes) ) foreach( $boletospendentes as $key1 => $value1 ){ $counter1++; ?>
                                

                                <?php } ?>
                          </div>
                          <div class="box-header bg-green">
                                <h1 class="box-title">Boletos Pagos</h1>
                              </div>
                              <div class="box-body">
                      
                                </div>
                          
            </div>
            </div>
                
        
         
          
          
                </div>
            
              </section>  
      </div> 
      
      
      
      
      
      
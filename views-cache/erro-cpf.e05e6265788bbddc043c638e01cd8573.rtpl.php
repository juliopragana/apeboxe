<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
    .title{color: #267b06}
    .dados{font-weight: bold; color: #04035c; }
  
    .card-text{font-size: 18px;}
  
    label{font-size: 18px;}
  
    .codigobarras{
      font-size: 15.5px;
  
  
    }
  </style>
  <?php if( $error != '' ){ ?>


  
    <?php $counter1=-1;  if( isset($error) && ( is_array($error) || $error instanceof Traversable ) && sizeof($error) ) foreach( $error as $key1 => $value1 ){ $counter1++; ?>  
    <section class="content-fluid">
            <div class="row justify-content-md-center my-5">
                <div class="col-sm-8 bg-white py-5 my-5">
                    <h1 class="display-1 text-center py-5 text-danger" >Ops!</h3>
                    <h3 class="text-center"><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3> 
                    <h5 class="text-center my-5"><?php echo htmlspecialchars( $value1["mensagem"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5> 
                </div>          
            </div>   
                    
    </section>
    <?php } ?>

  
    <?php }else{ ?>

  
  <section class="content">          
        
          <div class="row justify-content-md-center my-4" style="height: 80vh; ">
                  <div class="col-sm-8 bg-white py-5">
                  <h1 class="display-1 text-center py-5" >OPS!</h3>
                  <h1 class="display-5 text-center py-5">Nenhum registro encontrado</h1>
                  <a href="/" type="button" class="btn btn-danger btn-block" >Voltar para a página inicial</a>
                  </div>
          </div>
            
  </section> 
  <?php } ?>
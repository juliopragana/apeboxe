<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
  .title{color: #267b06}
  .dados{font-weight: bold; color: #04035c; }

  .card-text{font-size: 18px;}

  label{font-size: 18px;}

  .codigobarras{
    font-size: 15.5px;


  }
</style>
<?php if( $success != '' ){ ?>



<section class="content-fluid">
        <div class="row justify-content-md-center my-2">
            <div class="col-sm-8 bg-white py-2">
                <h1 class="display-4 text-center py-5 text-dark" >2ª Via do Boleto</h3>
                <h3 class="text-center">Prezado(a) <span class="text-primary"><?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>, consulte aqui seus boletos pendentes</h3><br>
                <div class="card  border-danger">
                        <div class="card-header text-center text-danger">
                                <h4>Boletos Pendentes</h4>
                        </div>
                        <?php $counter1=-1;  if( isset($success) && ( is_array($success) || $success instanceof Traversable ) && sizeof($success) ) foreach( $success as $key1 => $value1 ){ $counter1++; ?>        
                        <div class="card-body ">
                          <h5 class="card-title text-center"></h5>
                          <p>Código do boleto: <span class="dados"><?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                          <p>Referente: <span class="dados"><?php echo htmlspecialchars( $value1["referencia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                          <p>Valor: <span class="dados">R$<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                          <p>Data de Vencimento: <span class="dados"> <?php echo htmlspecialchars( $value1["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                          <p>Código de barras digitável: <span class="dados"><?php echo htmlspecialchars( $value1["barcodeNumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                          <!-- <div class="embed-responsive embed-responsive-16by9">
                                <embed src="<?php echo htmlspecialchars( $value1["linkdownload"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" width="600" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                          </div> -->
                          <br>
                          <a href="<?php echo htmlspecialchars( $value1["linkdownload"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="btn btn-primary">Abrir Boleto</a>
                          
                        </div>
                        <?php } ?>

                        <div class="card-body"> 
                        
                        </div>
                        <a href="/" class="btn btn-danger">Voltar para o Inicio</a>
                </div>
            </div>          
        </div>   
              
</section>


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
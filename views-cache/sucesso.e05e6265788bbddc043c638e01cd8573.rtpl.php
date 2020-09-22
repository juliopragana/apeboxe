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
      
      <?php $counter1=-1;  if( isset($success) && ( is_array($success) || $success instanceof Traversable ) && sizeof($success) ) foreach( $success as $key1 => $value1 ){ $counter1++; ?>
      <section class="content-fluid">
              <div class="row justify-content-md-center my-2">
                  <div class="col-sm-8 bg-white py-2">
                      <h1 class="display-1 text-center py-5 text-success" >Parabéns!</h3>
                      <h3 class="text-center">Senhor(a) <span class="text-primary"><?php echo htmlspecialchars( $value1["nome_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>, sua inscrição foi realizada com sucesso!</h3> 
                      <h5 class="text-center my-5">Sua inscrição ficará ativa após o pagamento do boleto</h5> 
                      <div class="card">
                              <div class="card-header text-center">
                                      <h4>Informações sobre o boleto</h4>
                              </div>
                              <div class="card-body">
                                <h5 class="card-title text-center"></h5>
                                <p>Código do boleto: <span class="dados"><?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                                <p>Valor: <span class="dados">R$<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                                <p>Data de Vencimento: <span class="dados"> <?php echo htmlspecialchars( $value1["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                                <div class="embed-responsive embed-responsive-16by9">
                                      <embed src="<?php echo htmlspecialchars( $value1["linkdownload"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" width="600" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                                </div>
                                <br>
                                <a href="<?php echo htmlspecialchars( $value1["linkdownload"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="btn btn-primary">Abrir Boleto</a>
                                <a href="/" class="btn btn-danger">Voltar para o Inicio</a>
                              </div>
                      </div>
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
<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="py-5 bg-light">
        <div class="container">
          <div class="row">

                        <div class="col-lg-4">
                                        <div class="p-4 mb-3 bg-white">
                                          <h3 class="h5 text-black mb-3 text-center">Segunda via do boleto</h3>
                                          <form class="form-row" id="form-cadastro" method="POST" action="/segunda-via">
                                                <div class="form-group col-md-12">
                                                        <input type="text" class="form-control"  name="cpf" placeholder="CPF" onkeypress="mascara(this, '###.###.###-##')" maxlength="14">
                                                </div>
                                                <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" id="datanascimento" name="datanascimento" placeholder="Data de Nascimento" onkeypress="mascara(this, '##/##/####')" maxlength="10">
                                                </div>
                                                <div class="form-group col-md-12 text-center">
                                                        <button type="submit" class="btn btn-success">Consultar Segunda Via</button>
                                                        <a class="btn btn-danger ml-2" value="Voltar" href="/">Voltar</a>
                                                </div>
                                          </form>
                                
                                        </div>
                                        
                                        
                                      </div>

            

           
            <?php if( $success != '' ){ ?>
         
            <div class="col-md-12 col-lg-8 mb-5">
                
                        
             
              
              <h3 class="h5 text-secondary mb-3 text-center"><hr>2ª Via do Boleto</h3> <hr>
              <div class="card border-danger">
                      <div class="card-header border-danger bg-danger text-center"><h5 class="text-white my-2">Boleto Pendente</h5></div>
              
                <div class="card-body border-danger ">
                       
                        <h5>Olá, <span class="text-info"><?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>. você possuí boleto(s) pendente(s).</h5>
                        <hr>
                        <?php $counter1=-1;  if( isset($success) && ( is_array($success) || $success instanceof Traversable ) && sizeof($success) ) foreach( $success as $key1 => $value1 ){ $counter1++; ?>
                        <p>Código do Boleto: <span class="text-info"><?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                        <p>Referente: <span class="text-info"><?php echo htmlspecialchars( $value1["referencia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                        <p>Valor: <span class="text-info">R$<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                        <p>Data de Vencimento: <span class="text-info"><?php echo htmlspecialchars( $value1["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></p>
                        <a href="<?php echo htmlspecialchars( $value1["linkdownload"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="btn btn-info">Abrir boleto</a>
                        <br>
                        <p style="text-align: right" class="text-info"><small >Caso já tenha feito o pagamento do boleto, favor desconsider.</small></p>
                        <hr>
                        <?php } ?>
                </div>
                
        
              </div>
              <?php } ?>
              <?php if( $erro != '' ){ ?>
              <div class="col-md-12 col-lg-8 mb-5">
            
                        <div class="card border-danger py-5">
                               <div class="card-body border-danger ">
                                        <h1 class="text-center text-danger"><i class="fa fa-ban" style="font-size: 39pt;" aria-hidden="true"></i></h1>
                                        <h3 class="h3 text-secondary text-center text-danger mb-4"> Ops, ocorreu um erro!</h3> 
                                  <h5 class="text-danger text-center">Cpf ou data de nascimento incorretos. Verifique seus dados!</h5>
                                  
                          </div>
                         
                  
                        </div>                
            
                <?php } ?>

            </div>
            
          

          </div>
        </div>
      </div>
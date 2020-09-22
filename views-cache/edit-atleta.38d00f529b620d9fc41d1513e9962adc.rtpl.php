<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="py-4">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8 m-0 border py-2 text-light" style="background-color: #4682B4">
        
            <?php if( $success != '' ){ ?>
            <div class="col-sm-12"> 
                  
                <div class="card mb-3 text-center bg-success">
                               
                        <div class="card-header text-white">
                                <h1 >Cadastro realizado com sucesso!</h1>
                                                                                       
                        </div>
                </div>                            <!-- <img class="card-img-top" src="/res/img/Logo.jpg" alt="Card image cap" >             -->
            </div> 
            <?php } ?>
            <?php $counter1=-1;  if( isset($success) && ( is_array($success) || $success instanceof Traversable ) && sizeof($success) ) foreach( $success as $key1 => $value1 ){ $counter1++; ?>           
          <form class="form-row" id="form-cadastro" method="POST" enctype="multipart/form-data" action="/edit-atleta">
            <div class="form-group col-md-12">
                <h2 class="display m-0 p-1 text-center bg-warning"> Edita Dados</h2>
              </div>
            <div class="form-group col-md-12">
              <h3 class="display m-0 p-1 text-center"> Dados pessoas</h3>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="nome" name="nome_atleta" value="<?php echo htmlspecialchars( $value1["nome_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-6">
              <input type="e-mail" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo htmlspecialchars( $value1["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onkeypress="mascara(this, '###.###.###-##')" maxlength="14">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onkeypress="mascara(this, '## #####-####')" maxlength="13">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="datanascimento" name="datanascimento" value="<?php echo htmlspecialchars( $value1["datanascimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onkeypress="mascara(this, '##/##/####')" maxlength="10">
            </div>

            <?php if( $value1["sexo"] == 'Masculino' ){ ?>
            <div class="form-group col-md-4">
              <select class="form-control my-2" id="sexo" name="sexo">
                <!-- <option value="">Sexo</option> -->
                <option value="Masculino" selected>Masculino</option>
                <option value="Feminino">Feminino</option>
              </select>
            </div>
            <?php }else{ ?>
            <div class="form-group col-md-4">
                <select class="form-control my-2" id="sexo" name="sexo">
                  <!-- <option value="">Sexo</option> -->
                  <option value="Masculino" >Masculino</option>
                  <option value="Feminino"selected>Feminino</option>
                </select>
              </div>
            <?php } ?>
                       
            <div class="form-group col-md-12">
              
              <h3 class="display m-0 text-center"> Endereço</h3>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="cep" name="cep" value="<?php echo htmlspecialchars( $value1["cep"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="9" onblur="pesquisacep(this.value);">
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="rua" name="rua" value="<?php echo htmlspecialchars( $value1["rua"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo htmlspecialchars( $value1["complemento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
              <input type="number" class="form-control" id="num" name="num" value="<?php echo htmlspecialchars( $value1["num"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo htmlspecialchars( $value1["bairro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo htmlspecialchars( $value1["cidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="uf" name="uf" value="<?php echo htmlspecialchars( $value1["uf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group col-md-12">
              <h3 class="display m-0 text-center"> Informações sobre a academia</h3>
            </div>
            <div class="form-group col-md-9">
              <select class="form-control my-2" id="academia" name="academia">
                <option>Selecione a Academia</option>
                <option selected><?php echo htmlspecialchars( $value1["academia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                <option>Academia A</option>
                <option>Academia B</option>
                <option>Academia C</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="professor" name="professor" value="<?php echo htmlspecialchars( $value1["professor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group  ml-4">
              <input type="checkbox" class="form-check-input" id="confirma" value="1">
              <label class="form-check-label" for="exampleCheck1">Confirmo que todos os meus dados estão corretos.</label>
            </div>
            <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
            <input type="button" class="btn btn-danger btn-block" value="Voltar" onClick="history.go(-1)">
          </form>
          <?php } ?>
          
        </div>
      </div>
    </div>
  </div>
  
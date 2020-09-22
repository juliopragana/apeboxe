<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="py-4">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8 m-0 border py-2 text-light" style="background-color: #4682B4">
              
          <form class="form-row" id="form-cadastro" method="POST" enctype="multipart/form-data" action="/cadastro-atleta">
            <div class="form-group col-md-12">
              <h3 class="display m-0 p-1"> Dados pessoas</h3>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="nome_atleta" name="nome_atleta" placeholder="Nome Completo">
            </div>
            <div class="form-group col-md-6">
              <input type="e-mail" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" onkeypress="mascara(this, '###.###.###-##')" maxlength="14">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Nº Celular. Ex: 99 99999-9999" onkeypress="mascara(this, '## #####-####')" maxlength="13">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="datanascimento" name="datanascimento" placeholder="Data de Nascimento" onkeypress="mascara(this, '##/##/####')" maxlength="10">
            </div>
            <div class="form-group col-md-4">
              <select class="form-control my-2" id="sexo" name="sexo">
                <option value="">Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
              </select>
            </div>
            <div class="form-group col-md-8"> Carregue sua foto com fundo branco de no máximo 2MB. <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            </div>
            <div class="form-group col-md-12">
              <h
              <h3 class="display m-0"> Endereço</h3>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" maxlength="9" onblur="pesquisacep(this.value);">
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="rua" name="rua" placeholder="Nome da Rua">
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
            </div>
            <div class="form-group col-md-4">
              <input type="number" class="form-control" id="num" name="num" placeholder="Número">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="uf" name="uf" placeholder="Estado">
            </div>
            <div class="form-group col-md-12">
              <h3 class="display m-0"> Informações sobre a academia</h3>
            </div>
            <div class="form-group col-md-9">
              <select class="form-control my-2" id="academia" name="academia">
                <option>Selecione a Academia</option>
                <option>Academia A</option>
                <option>Academia B</option>
                <option>Academia C</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="professor" name="professor" placeholder="Nome do Professor">
            </div>
            <div class="form-group  ml-4">
              <input type="checkbox" class="form-check-input" id="confirma" value="1">
              <label class="form-check-label" for="exampleCheck1">Confirmo que todos os meus dados estão corretos.</label>
            </div>
            <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
            <input type="button" class="btn btn-danger btn-block" value="Voltar" onClick="history.go(-1)">
          </form>
        </div>
      </div>
    </div>
  </div>
  
<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="py-5 bg-light">
  <div class="container">
    <div class="row">
   
      <div class="col-md-12 col-lg-8 mb-5">
      
        
        <h3 class="h5 text-secondary mb-3 text-center"><hr>Inscrição Curso de Formação de Professores de Boxe</h3> <hr>
        
        <form class="form-row" id="form-cadastro" method="POST" enctype="multipart/form-data" action="/cadastro-curso">
           

          <div class="form-group col-md-12">
              <h3 class="display m-0 p-1"> Dados pessoas</h3>
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="nome_atleta" name="nome_atleta" placeholder="Nome Completo">
            </div>
            <div class="form-group col-md-8">
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
              <select class="form-control " id="sexo" name="sexo">
                <option value="">Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
              </select>
            </div>
             <div class="form-group col-md-12">
              <h3 class="display m-0" text-secondary> Endereço</h3>
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
              <input type="text" class="form-control" id="academia" name="academia" placeholder="Nome da Academia">
            </div>
            <div class="form-group  col-md-12 ml-4">
              <input type="checkbox" class="form-check-input" id="confirma" name ="confirma" value="1">
              <label class="form-check-label" for="exampleCheck1">Confirmo que todos os meus dados estão corretos.</label>
            </div>
            <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="button" class="btn btn-danger ml-2" value="Voltar" onClick="history.go(-1)">Voltar</button>
          </div>


        </form>
      </div>

      <div class="col-lg-4">
        <div class="p-4 mb-3 bg-white">
          <h3 class="h5 text-black mb-3">Informações sobre o curso</h3>
          <p class="mb-0 font-weight-bold">Curso de Formação para professores de Boxe</p>
          <p>O Curso acontecerá nos dias 25 e 26 de Maio e será ministrado pelo professor Yves Moraes </p>
          <p class="mb-4">O Local será na Academia New Champions Team, localizada na Av. Dr. José Claúdio Gueiros Leite, 3285, Sala 6 - Janga/Paulista.</p>
          <p class="mb-4">O valor do investimento será de R$300,00 (R$302,00 no boleto bancário). </p>
          <p class="mb-4">Oferecimento: FBPE e APEBOXE</p>
          <p>Informações: (81) 99248-1166 - WhatsApp</p>

        </div>
        
        
      </div>
    </div>
  </div>
</div>
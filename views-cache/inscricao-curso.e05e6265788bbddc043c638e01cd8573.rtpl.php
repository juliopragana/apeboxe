<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="py-4">
    <div class="container">
      <div class="row justify-content-md-center">
       
        <div class="col-md-12 m-0 border py-2 text-light" style="background-color: #000">
            
          <form class="form-row" id="form-cadastro" method="POST" enctype="multipart/form-data" action="/cadastro-curso">
            <div class="form-group col-md-12" style="font-size:10pt">
            <h2>Informações sobre o curso</h2>
            <p>Curso de Formação Técnica de Boxe</p>
            <p>Instrutor: Yves Moraes</p>
            <p>Local: cademia News Champions Team</p>
            <p>Endereço: Av: Dr Claudio José Gueiros Leite, 3285, Sala 06, Janga - Paulista - PE, cep: 53437-000</p>
            <p>Valor do módulo: R$302,00 no boleto bancário</p>
          </div>
            <div class="form-group col-md-12">
                <h2 class="display m-0 text-center bg-white my-2 py-2" style="color:black;"> Inscrição - Curso de Formação - Módulo 3</h2>
              </div>
            <div class="form-group col-md-12">
                <h3 class="display m-0"> Dados Pessoais</h3>
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
              <select class="form-control" id="sexo" name="sexo">
                <option value="">Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
              </select>
            </div>
                <div class="form-group col-md-12">
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
                <input type="text" class="form-control" id="academia" name="academia" placeholder="Nome da Academia">
              </div>
             <div class="form-group  ml-4 col-md-12">
              <input type="checkbox" class="form-check-input" id="confirma" name="confirma" value="1">
              <label class="form-check-label" for="exampleCheck1">Confirmo que todos os meus dados estão corretos.</label>
            </div>
            <div class="form-group col-md-12 text-right">
                <button type="submit" class="btn btn-success ">Cadastrar</button>
                <a href="/" class="btn btn-danger ml-2">Voltar</a>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  
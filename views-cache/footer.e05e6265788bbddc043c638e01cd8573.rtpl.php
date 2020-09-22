<?php if(!class_exists('Rain\Tpl')){exit;}?></div>


<div class="modal fade" aria-hidden="true" aria-labelledby="inscricaolabletitle" id="inscricao" role="dialog"  style="display: none;" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content" >
      <div class="modal-body">
       <div class="col-md-12">
        <h2 class="text-center"> Inscrições </h2>
        <br>
         
        <a href="/inscricao-curso" class="btn btn-lg btn-block btn-primary my-2">Curso de Formação Técnica - Módulo 3<br><span style="font-size:13px;">Valor do módulo: R$302,00 </span></a>
        <h6 class="display text-center text-danger">Inscrições não disponíveis</h6>
        <a href="/cadastro-atleta" class="btn btn-lg btn-block btn-success disabled">Filiação de Atleta <br> <span style="font-size:13px;"> Valor da inscriçao: R$70,00 + R$2,00 Taxa de Manutenção</span></a>
        <a href="#" class="btn btn-lg btn-block text-white btn-secondary disabled"> Filiação de Técnico <br> <span style="font-size:13px;"> Valor da inscriçao: R$100,00 + R$2,00 Taxa de Manutenção </span> </a>
        <a href="#" class="btn btn-lg btn-block btn-danger disabled">Filiação de Academia <br> <span style="font-size:13px;"> Valor da inscriçao: R$200,00 + R$2,00 Taxa de Manutenção</span> </a>
        <br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
      </div>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" aria-hidden="true" aria-labelledby="segunda-viaScrollableTitle" id="segunda-via" role="dialog" style="display: none;" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-body" >
        <h2 class="text-center"> Segunda via do Boleto </h2>
        <br>
        <form role="form" id="form-cadastro" method="POST" enctype="multipart/form-data" action="/segunda-via">
          <div class="box-body">
            <div class="form-group col-md-12">
              <input type="text" class="form-control" name="cpf" placeholder="CPF" onkeypress="mascara(this, '###.###.###-##')" maxlength="14">
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="datanascimento" name="datanascimento" placeholder="Data de Nascimento" onkeypress="mascara(this, '##/##/####')" maxlength="10">
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-success">Visualizar Boleto</button>
            </div>
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>






<nav class="navbar navbar-dark bg-dark" style="">
<div class="">
<div class="container">
<div class="row">
  <span class="navbar-text" style="">Copyright © 2019 - <a class="link info" href="http://jpragana.com" target="_blank">JHDA - Sistemas</a></span>
</div>
</div>
</div>
</nav>



<script>

$(document).ready(function(){
    $('#aviso').modal('show')
})

$(function() {
$('#myList a:last-child').tab('show')

})

var upload = document.getElementById("image");

upload.addEventListener("change", function(e) {
    var size = upload.files[0].size;
    if(size < 2048576) { //2MB      
    } else {           
      alert('Imagem tem que ter no máximo 2 MB'); //Acima do limite
      upload.value = ""; //Limpa o campo          
    }
    e.preventDefault();
});




</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  
  <script src="/res/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/res/lib/typed/typed.js"></script>
  <script src="/res/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/res/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="/res/lib/isotope/isotope.pkgd.min.js"></script>
 
 
</body>

</html>
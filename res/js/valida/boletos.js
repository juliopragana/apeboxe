$(document).ready(function(){
    $(".btn-aprovar").click(function(event){
      var aprovar = confirm("Deseja reamente aprovar o pagamento desse boleto?")
        if(aprovar){
          $('.table tbody').on('click', '.btn', function(){
            var currow = $(this).closest('tr');
            var id_atleta = currow.find('td:eq(0)').text();
            var codigo = currow.find('td:eq(5)').text();
      
              alert(codigo)
            $.ajax({
              url: '/aprovar-boleto',
              type: 'post',
              data: {id_atleta, codigo},
              beforeSend: function(){
                $('#carregando').fadeIn();
              },
              success: function(retorno){
               if(retorno == 'true'){
                 alert('Alteração realizada com sucesso!!!')
                 window.location.reload()
               }
                if(retorno == 'false'){
                alert('Aconteceu um erro. Tente novamente mais tarde.')
                window.location.reload()
              }
              },
              error: function(erro){
                $('#resposta').html(erro)
                console.log(erro)
              }
            })
          })
          
        } else {
          event.preventDefault();
        }

    })
    $(".btn-cancelar").click(function(event){
      var aprovar = confirm("Deseja reamente cancelar o pagamento desse boleto?")
        if(aprovar){
          $('.table tbody').on('click', '.btn', function(){
            var currow = $(this).closest('tr');
            var codigo = currow.find('td:eq(5)').text();
            
           $.ajax({
              url: '/cancelar-boleto',
              type: 'post',
              data: {codigo},
              beforeSend: function(){
                $('#carregando').fadeIn();
              },
               success: function(retorno){
               if(retorno == 'true'){
                 alert('Alteração realizada com sucesso!!!')
                 window.location.reload()
               }
                if(retorno == 'false'){
                alert('Aconteceu um erro. Tente novamente mais tarde.')
                window.location.reload()
              }
              },
              error: function(erro){
                $('#resposta').html(erro)
                console.log(erro)
              }
            })
          })
          
        } else {
          event.preventDefault();
        }

    })
    $(".btn-regerar").click(function(event){
        var aprovar = confirm("Deseja reamente gerar um novo boletok?")
          if(aprovar){
            $('.table tbody').on('click', '.btn', function(){
              var currow = $(this).closest('tr');
              var id_atleta = currow.find('td:eq(0)').text();
              var codigo = currow.find('td:eq(5)').text();
        
              alert(codigo)
              $.ajax({
                url: '/regerar-boleto',
                type: 'post',
                data: {id_atleta, codigo},
                beforeSend: function(){
                  $('#carregando').fadeIn();
                },
                success: function(retorno){
                 if(retorno == 'true'){
                   alert('Alteração realizada com sucesso!!!')
                   window.location.reload()
                 }
                  if(retorno == 'false'){
                  alert('deu ruim')
                  window.location.reload()
                }
                },
                error: function(erro){
                  $('#resposta').html(erro)
                  console.log(erro)
                }
              })
            })
            
          } else {
            event.preventDefault();
          }

      })


  })
 
    $(document).ready(function(){
      jQuery.validator.setDefaults({
        debug: true
        });

        
      $("#form-cadastro").validate({
            rules:{
                nome_atleta:{
                  required: true,
                  maxlength: 100,
                  minlength: 3,
                  minWords: 2
                },
                email:{
                  required: true,
                  email: true,
                },
                cpf:{
                  required: true,
                  cpfBR: true,
                  remote: {
                    url: "/checar-cpf",
                    type: "post",
                    data: {
                        cpf: function() {
                          return $( "#cpf" ).val();
                        }
                      }
                    }
                },
                telefone:{
                  required: true
                },
                sexo:{
                  required: true
                },
                datanascimento:{
                  required: true
                },
                image:{
                  required: true,
                  accept: "image/*"
                },
                cep:{
                  required: true
                },
                rua:{
                  required: true
                },
                num: {
                  required: true
                },
                bairro:{
                  required: true
                },
                cidade:{
                  required: true
                },
                uf:{
                  required: true
                }, 
                academia:{
                  required: true
                },
                professor:{
                  required: true
                }, 
                confirma:{
                  required: true
                }
            },
            messages:{
                confirma:{
                  required: "<span style='color:red'> Favor confirme os seus dados</sapn>"
                }, 
                cpf:{
                  remote: "<span style='color:red'>CPF já cadastrado</span>"
                }
            },
            submitHandler: function(form) {
              form.submit();
            }
            
        });

        $("#form-cadastro-usuario").validate({
            rules:{
              nome:{
                required: true,
                maxlength: 100,
                minlength: 3,
                minWords: 2
              },
              usuario:{
                required: true,
                remote: {
                  url: "/checar-usuario",
                  type: "post",
                  data: {
                      cpf: function() {
                        return $( "#usuario" ).val();
                      }
                    }
                  }
              },
              email:{
                required: true,
                email: true,
              },
              senha:{
                required: true,
              }, 
              conf_senha:{
                equalTo: "#senha"
              }
              
          },
          messages:{
              usuario:{
                remote: "<span style='color:red'>Usuário já existe. Tente outro</span>"
              }, 
              conf_senha:{
                equalTo:"<span style='color:red'>Senhas não conferem</span>"
              }
          },
          submitHandler: function(form) {
            form.submit();
          }
          
      });

          // var typed = $(".typed");

          // $(function() {
          //   typed.typed({
          //   strings: ["Filia-se Agora"],
          //   typeSpeed: 50,
          //   loop: false,
          //   });
          // });



    });

   
    function mascara(t, mask){
      var i = t.value.length;
      var saida = mask.substring(1,0);
      var texto = mask.substring(i)
      if (texto.substring(0,1) != saida){
      t.value += texto.substring(0,1);
      }
  } function mascara(t, mask){
    var i = t.value.length;
    var saida = mask.substring(1,0);
    var texto = mask.substring(i)
    if (texto.substring(0,1) != saida){
    t.value += texto.substring(0,1);
    }
} 
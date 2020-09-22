<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Boletos Cancelados
          </h1>
          <ol class="breadcrumb">
            <li><a href="/painel-curso"><i class="fa fa-dashboard"></i> Pagina Inicial</a></li>
            <li class="active">Boletos Cancelados</li>
          </ol>
        </section>
      
         <!-- Content Header (Page header) -->
         <section class="content">
          
      
        <!--  ############################ TABELA ########################### -->
       
          <div class="row">
            
            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header bg-orange ">
                    <h3 class="box-title">Lista de Atletas com boletos cancelados</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                        <table id="lista-pendente" class="table table-hover" style="width: 99%">
                                <thead >
                                    <tr>
                                      <th>ID Atleta</th>
                                      <th scope="col" class="bg-gray text-center">Nome Atleta</th>
                                      <th scope="col" class="bg-gray text-center">CPF</th>
                                      <th scope="col" class="bg-gray text-center">Email</th>
                                      <th scope="col" class="bg-gray text-center">telefone</th>
                                      <th scope="col" class="bg-blue text-center">Código Boleto</th>
                                      <th scope="col" class="bg-blue text-center">Referencia</th>
                                      <th scope="col" class="bg-blue text-center">Data Vencimento</th>
                                      <th scope="col" class="bg-blue text-center">Valor</th>
                                      <th scope="col" class="bg-gray text-center" >Ação</th>
                                   </tr>
                                </thead>
                                <tbody>
                                  
                                    <?php if( $alunos != NULL ){ ?>
                                  <?php $counter1=-1;  if( isset($alunos) && ( is_array($alunos) || $alunos instanceof Traversable ) && sizeof($alunos) ) foreach( $alunos as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                      <td><?php echo htmlspecialchars( $value1["id_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td><?php echo htmlspecialchars( $value1["nome_atleta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center"><?php echo htmlspecialchars( $value1["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center"><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center"><?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center"><?php echo htmlspecialchars( $value1["codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center"><?php echo htmlspecialchars( $value1["referencia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center"><?php echo htmlspecialchars( $value1["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center" >R$<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                      <td class="text-center" >
                                          <!-- <a href="#" type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                        <!-- <a href="#" type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a> 
                                        <a href="#" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a> -->
                                        <button type="button" class="btn btn-success btn-aprovar" id="click"><i class="fa fa-refresh" aria-hidden="true"></i> Gerar outro boleto</button>
                                        
                                      </td>
                                    </tr>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    
                                    <?php } ?>
                                  
                                </tbody>
                            </table>
                    <div class="btn text-right">
                    <a type="button"  href="/painel-curso" class="btn btn-danger"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                  </div>
                  </div>
              </div>
              </div>
            </div>
          
            
              </section>  
      </div> 
      
      <script>
          $(document).ready(function(){
            $(".btn-aprovar").click(function(event){
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
          
      </script>
      
      
      
      
      
      
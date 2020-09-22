<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="res/css/bootstrap.css">
    
</head>
<body>
    <div class="content">
            <div class="row justify-content-md-center my-4">
                    <div class="col-md-10">
                        <?php if( $stitle != '' ){ ?>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading"><?php echo htmlspecialchars( $stitle, ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                            <p><?php echo htmlspecialchars( $sinfo, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                        </div>
                        <?php } ?>
                        
                        <?php if( $stitle != '' ){ ?>
                        <div class="card">
                                <div class="card-header">
                                       Dados do Boleto
                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                    
                                    <h5 class="card-title">Boleto enviado para o email: fulano@mail.com</h5>
                                    <p class="small">Teste</p>
                                    <p class="card-text">Código do Boleto: </p>
                                    <p class="card-text"> Descrição do boleto: </p>
                                    <p class="card-text"> Data de vencimento: </p>
                                    <p class="card-text">Código de barras: </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                        </div>
                        <?php } ?>

                        <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://sandbox.boletobancario.com/boletofacil/checkout/981A5D8BA6B411EA5A1C8B1B1B151D2F88F5B8E88BCD74DB"></iframe>
                        </div>
                    </div>   
            </div>            
    </div>
    
    
</body>
</html>
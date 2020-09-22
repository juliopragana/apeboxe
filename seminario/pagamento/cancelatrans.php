<?php
 
require '../gn-api-sdk-php/vendor/autoload.php';
 
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;
 
$clientId = 'Client_Id_5d75fa4ef9b9cd18a4f464ad66ba32ee600b8ec3';
$clientSecret = 'Client_Secret_20fa5bd5d70917070e66869e2f794bae5b74972e';


$options = [
  'client_id' => $clientId,
  'client_secret' => $clientSecret,
  'sandbox' => false
];
 
$params = [
  'id' => 1291218


];
 
try {
    $api = new Gerencianet($options);
    $charge = $api->cancelCharge($params, []);
 
    print_r($charge);
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}
?>
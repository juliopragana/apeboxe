<pre>

<?php


 //$valor = intval($_GET['valor']); 
$valor = intval($linha['valor2']);

//require __DIR__.'http://campfacil.com.br/gn-api-sdk-php/vendor/autoload.php';
 
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
 
$item_1 = [
    'name' => 'COPA AGRESTE DE JIU JITSU',
    'amount' => 1,
    'value' => $valor
];
 

 
$items =  [
    $item_1,

];
 
$body  =  [
    'items' => $items
];
 
try {
    $api = new Gerencianet($options);
    $charge = $api->createCharge([], $body);
 
    //print_r($charge);
$charge;
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}


$arr_result = $charge;
//$arr = $charge;

foreach($arr_result as $data)
{
     if(is_array($data))
     {
   recursive_show_array($data);
          foreach($data as $other_data)
          {
              // echo $other_data, '<br/>';
                 // $other_data;
          }
     }
     else
     {
         // echo "\n$data,\n'<br/>'";
//echo "<input type='text' value=$data>";
     }
}

//--------------------------
$count=0;
function recursive_show_array($arr)
{
     foreach($arr as $value)
     {
          if(is_array($value))
          {
               recursive_show_array($value);
          }
          else
          {
               //echo $value;
$count++; 
echo "<br><input type='hidden' value='$value' name='op$count'>";
          }
     }
}
//echo "<input type='hidden' value='$charge'><br><br><br><br>";
//--------------------------










?>


</pre>


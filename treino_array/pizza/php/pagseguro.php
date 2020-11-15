<?php 


/*
$email = 'rgyr2010@hotmail.com';
$token = '97820290-7bfc-4f6b-9c7f-b698fcbf7167a2f4908840b8828959f5cf8af6b76f52767f-6b31-4e3d-9d49-d63518c2c4a7';
*/
?>
<?php


//$data = 'email=seuemail@dominio.com.br&amp;token=95112EE828D94278BD394E91C4388F20&amp;currency=BRL&amp;itemId1=0001&amp;itemDescription1=Notebook Prata&amp;itemAmount1=24300.00&amp;itemQuantity1=1&amp;itemWeight1=1000&amp;itemId2=0002&amp;itemDescription2=Notebook Rosa&amp;itemAmount2=25600.00&amp;itemQuantity2=2&amp;itemWeight2=750&amp;reference=REF1234&amp;senderName=Jose Comprador&amp;senderAreaCode=11&amp;senderPhone=56273440&amp;senderEmail=comprador@uol.com.br&amp;shippingType=1&amp;shippingAddressStreet=Av. Brig. Faria Lima&amp;shippingAddressNumber=1384&amp;shippingAddressComplement=5o andar&amp;shippingAddressDistrict=Jardim Paulistano&amp;shippingAddressPostalCode=01452002&amp;shippingAddressCity=Sao Paulo&amp;shippingAddressState=SP&amp;shippingAddressCountry=BRA';
/*
Caso utilizar o formato acima remova todo código abaixo até instrução $data = http_build_query($data);
*/

if($_REQUEST):
$url = 'https://ws.pagseguro.uol.com.br/v2/checkout';
$data['email'] = 'rgyr2010@hotmail.com';
$data['token'] = '97820290-7bfc-4f6b-9c7f-b698fcbf7167a2f4908840b8828959f5cf8af6b76f52767f-6b31-4e3d-9d49-d63518c2c4a7';


$i=0;
foreach($_POST as $key => $value){
  $i++;
 
if(!empty($data['itemDescription'.$i])){
$data['itemDescription'.$i] = $_REQUEST['itemDescription0'];;
$data['itemAmount1']      = $_REQUEST['itemAmount'];;
$data['itemQuantity1']    = $_REQUEST['itemQuantity0'];;
$data['itemWeight1'] = '1000';


$data['currency'] = 'BRL';
$data['reference']                 = 'REF123';
//$data['senderName']                = $_POST['nome'];//nome
//$data['senderAreaCode']            = $_POST['ddd'];; // ddd
//$data['senderPhone']               = $_POST['cel']; //cel 
//$data['senderEmail']               = $_POST['email'];//email

@$data['shippingType'] = '1';
@$data['shippingAddressStreet']     = $_POST['rua'];//rua
@$data['shippingAddressNumber']     = $_POST['numero'];//numero
@$data['shippingAddressComplement'] = $_POST['complemento']; //complemento
@$data['shippingAddressDistrict']   = $_POST['bairro']; //bairro
@$data['shippingAddressPostalCode'] = $_POST['cep'];//cep
@$data['shippingAddressCity']       = $_POST['cidade'];//cidade
@$data['shippingAddressState']      = $_POST['estado'];//estado
@$data['shippingAddressCountry']    = 'BRA';
@$data['redirectURL'] = 'http://rogerneves.com.br/paginaDeAgracedimento';

$data = http_build_query($data);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
}
$xml= curl_exec($curl);

if($xml == 'Unauthorized'){
    //Insira seu código de prevenção a erros
var_dump($data);
    exit;//Mantenha essa linha
}
curl_close($curl);

$xml= simplexml_load_string($xml);
if(count($xml -> error) > 0){
    //Insira seu código de tratamento de erro, talvez seja útil enviar os códigos de erros.

var_dump($data);

    exit;
}}

echo $xml -> code;
exit;
//header('Location:https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml -> code);

endif;
?>




<?php
function gen_uuid()
{
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),

        // 16 bits for "time_mid"
        mt_rand(0, 0xffff),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand(0, 0x0fff) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand(0, 0x3fff) | 0x8000,

        // 48 bits for "node"
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}
$curl = curl_init();
$phone=$_POST['phone'];
$amount=$_POST['amount'];
$uuid = gen_uuid();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://opay-api.oltranz.com/opay/paymentrequest',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'
{
  "telephoneNumber" : "'.$phone.'",
  "amount" : "'.$amount.'",
  "organizationId" : "f46ce6c5-7480-4486-a1e3-606e8d9fa326",
  "description" : "Stadium Ticket Management System",
  "callbackUrl" : "http://localhost/ticket/testApi.php",
  "transactionId" : "'.$uuid.'"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
$status=0;

$conn=new mysqli('localhost','root','','medallion');
$stm = $conn->prepare("INSERT INTO `payement` (`phone`, `amount`, `status`) VALUES (?, ?, ?)");
$stm->bind_param("sss", $phone, $amount, $status);
if($stm->execute() == TRUE)
{
echo"<script>alert('Transaction Sent Successfully')</script>";
}
else
{
    echo"<script>alert('Samething went wrong')</script>";
}
?>
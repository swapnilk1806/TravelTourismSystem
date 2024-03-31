<?php
// Replace these with your actual PhonePe API credentials

session_start();
$userid = $_SESSION['username'];
echo $userid;

$id_p = '098765';
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];
$address = $_POST['address'];
$gender = 'male';
$state = $_POST['state'];
$region = $_POST['region'];
$city = $_POST['city'];
$code = $_POST['postal_code'];
$ad_no = $_POST['Adhard_no'];

$amm = $_GET['am'];
$amo = '';
for($i=0; $i< strlen($amm); $i++){
     if($amm[$i] == '/'){
      break;
     }
     $amo = $amo.$amm[$i];
}
echo $amo."<br>";
$id = '';
$bool = 0;
for($i=0; $i<strlen($amm); $i++){
      if($amm[$i]== '?'){
        $bool++;
        continue;
      }
      if($bool == 1){
        $id = $id.$amm[$i];
      }
}
echo $id."<br>";
//  global $userid, $id_p, $name, $email, $number, $date, $address, $gender, $state, $city, $code, $ad_no, $amm;

$merchantId = 'PGTESTPAYUAT'; // sandbox or test merchantId
$apiKey = "099eb0cd-02cf-4e2a-8aca-3e6c6aff0399"; // sandbox or test APIKEY
$redirectUrl = '';

// Set transaction details
$order_id = uniqid();
$name = $name;
$email = $email;
$mobile = $number;
$amount = $amo; // amount in INR
$description = 'Payment for Product/Service';


$paymentData = array(
  'merchantId' => $merchantId,
  'merchantTransactionId' => "MT7850590068188104", // test transactionID
  "merchantUserId" => "MUID123",
  'amount' => $amount * 100,
  'redirectUrl' => $redirectUrl,
  'redirectMode' => "POST",
  'callbackUrl' => $redirectUrl,
  "merchantOrderId" => $order_id,
  "mobileNumber" => $mobile,
  "message" => $description,
  "email" => $email,
  "shortName" => $name,
  "paymentInstrument" => array(
    "type" => "PAY_PAGE",
  )
);


$jsonencode = json_encode($paymentData);
$payloadMain = base64_encode($jsonencode);
$salt_index = 1; //key index 1
$payload = $payloadMain . "/pg/v1/pay" . $apiKey;
$sha256 = hash("sha256", $payload);
$final_x_header = $sha256 . '###' . $salt_index;
$request = json_encode(array('request' => $payloadMain));

$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $request,
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "X-VERIFY: " . $final_x_header,
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

  $res = json_decode($response);

  if (isset($res->success) && $res->success == '1') {
    $paymentCode = $res->code;
    $paymentMsg = $res->message;
    $payUrl = $res->data->instrumentResponse->redirectInfo->url;

    $conn = pg_connect("host=localhost dbname=TR user=postgres password=1806");
    $query2 = "INSERT INTO public.\"Registrations\"(user_id, p_id, name, email, \"number\", b_date, gender, address, state, city, pin_code, add_no, amount)VALUES ('$userid','$id','$name','$email','$number','$date','$gender','$address','$state','$city','$code','$ad_no','$amo');";



    if ($result = pg_query($conn, $query2)) {
      echo "<br>Data Added Successfully.";
    } else {
      echo "<br>Error.";
    }
    header('Location:' . $payUrl);
  }
}

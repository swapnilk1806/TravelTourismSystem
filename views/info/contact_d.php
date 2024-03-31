<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo $name."<br>";
echo $email."<br>";
echo $message."<br>";

$host = 'localhost';
$dbname = 'TR';
$username = 'postgres';
$password = '1806';

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
    echo "Connection failed";
    exit;
}
  $tablename = 'top_card';

    $query = "INSERT INTO public.contact_us(name, email, message)VALUES ('$name','$email','$message');";
    $result = pg_query($conn, $query);

    if(!$result){
      echo "message submit";
    }
?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$package = $_POST['package'];
$message = $_POST['message'];

echo $name . "<br>";
echo $package . "<br>";
echo $email . "<br>";
echo $message . "<br>";

require('./database_connect.php');

$host = 'localhost';
$dbname = 'TR';
$username = 'postgres';
$password = '1806';

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
  echo "Connection failed";
  exit;
}


$query = "INSERT INTO public.enqure(name, \"package\", email, message)VALUES ('$name', '$package', '$email', '$message');";
$result = pg_query($conn, $query);

if (!$result) {
  echo "message submit";
}


?>
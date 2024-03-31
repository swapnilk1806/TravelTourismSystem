<p>kadam</p>

<?php

$host = 'localhost';
$dbname = 'TR';
$username = 'postgres';
$password = '1806';

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
    echo "Connection failed";
    exit;
}

session_start();
echo $_SESSION['username'] . "<br>";

$email = $_POST['email'];
$passwords = $_POST['password'];
$message = $_POST['message'];
$number = $_POST['number'];

echo $email . " " . $passwords . " " . $message . " " . $number . "<br>";
$query = "INSERT INTO public.cancle_process(user_id, email, password, message, mo_number)VALUES ('$username','$email','$password','$message', '$number');";

if ($result = pg_query($conn, $query)) {
    echo "<script>alert('Request send cancelation tour');</script>";
    echo "<br>Data Added Successfully.";
} else {
    echo "<br>Error.";
}

header("refresh:0;url=login_page");
?>


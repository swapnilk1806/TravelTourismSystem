
<?php

$id = uniqid();

//$packagename = $_POST['packagename'];
$message = $_POST['feedback'];
$customername  = $_POST['text'];
$date = $_POST['date'];
$pname = $_GET['pname'];

echo "id : " . $id . "<br>";
echo "packname : ".$pname . "<br>";
echo " message : " . $message . "<br>";
echo "customer name : " . $customername . "<br>";
echo "date " . $date . "<br>";


$host = 'localhost';
$dbname = 'TR';
$username = 'postgres';
$password = '1806';

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
    echo "Connection failed";
    exit;
}
    $query2 = "INSERT INTO public.feedback(id, package_name, feedback, customer_name, date)VALUES ('$id','$pname','$message','$customername','$date');";
    if ($result = pg_query($conn, $query2)) {
      echo "<br>Data Added Successfully.";
    } else {
      echo "<br>Error.";
    }
?>
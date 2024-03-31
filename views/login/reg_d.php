<?php


require('./database_connect.php');

$name =  $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$mo_no = $_POST['mo_no'];

$query = "INSERT INTO public.login(name, email, password, mo_no)VALUES ('$name','$username','$password', '$mo_no');";
$result = pg_query($conn, $query);

if (!$result) {
    echo "message submit";
}


?>
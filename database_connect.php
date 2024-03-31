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
?>
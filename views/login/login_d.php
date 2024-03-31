<?php
require('./database_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * From public.login";
$result = pg_query($conn, $query);

if (!$result) {
    echo "message submit";
}

$bool = 0;

?>
<?php
while ($row = pg_fetch_assoc($result)) {
    if ($username == $row['email']) {
        $bool++;
        if ($password == $row['password']) {
            $bool++;
        }
    }
}

?>


<?php

if ($bool == 0) {
    echo "username does not exit";
} else if ($bool == 1) {
    echo "<script>alert(\"password wrong!\");</script>";
} else if ($bool == 2) {

    session_start();
    //echo "username : " . $_SESSION['username'] . "<br>";
    //echo "password : " . $_SESSION['password'] . "<br>";
    //session_reset();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;


    echo "username : " . $_SESSION['username'] . "<br>";
    echo "password : " . $_SESSION['password'] . "<br>";
    //echo "username : ". $_SESSION['username']."<br>";
    //echo "password : ". $_SESSION['password']."<br>";
     header("refresh:0;url=login_page");
}

?>


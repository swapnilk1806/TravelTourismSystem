<?php

session_start();
echo $_SESSION['username'];
echo $_SESSION['password'];


  session_unset();
  session_destroy();
  
  echo "log out your account";

  header("refresh:0;url=/");
  //echo 'log out page';
?>
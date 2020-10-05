<?php
session_start();
if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
  header('location: /login/login.php');
  exit;
}
else{
    session_unset();
    session_destroy();
    header('location: /login/login.php');
}
?>
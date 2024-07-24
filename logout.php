<?php
session_start();
if(isset($_SESSION['email'])){
  $_SESSION['email']='';
  $_SESSION['pass']='';
  session_destroy();
  header("Location: http://localhost/Project1/login.php");
}

?>
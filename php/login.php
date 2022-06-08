<?php 

if(isset($_POST["submit"])) {

  $email = $_POST["Email"];
  $pwd = $_POST["Password"];

  require_once 'config.php';
  require_once 'functions.php';

  loginUser($conn, $email, $pwd);

} else {
  header("location: ../index.php");
  exit();
}

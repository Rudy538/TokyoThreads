<?php
session_start();
include_once("db-conn.php");

$email = $_POST["email"];
$pass = $_POST["pass"];

$query = "SELECT email, pass FROM users WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($conn, $query);

$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  if(isset($_SESSION["email"]) && isset($_SESSION["pass"])){
    PhpAlert("You are already logged in!");
    exit();
  }else{
    if ($num_rows > 0) {
      $_SESSION["db_email"] = $row["email"];
      $_SESSION["db_pass"] = $row["pass"];
      PhpAlert('Logged in as: ' . $_SESSION["db_email"]);
    }else {
      session_unset();
      session_destroy();
      PhpAlert("Wrong email or password");
      exit();
    } 
  }
}else{
  header("Location: ../views/index.php");
}

$_SESSION["email"] = $_SESSION["db_email"];
$_SESSION["pass"] = $_SESSION["db_pass"];
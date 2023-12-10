<?php
session_start();
include_once("db-conn.php");

$email = $_POST["email"];
$pass = $_POST["pass"];

$query = "SELECT email, pass FROM users WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($conn, $query);

mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$db_email = $row["email"];
$db_pass = $row["pass"];

if (isset($_SESSION["email"])) {
  PhpAlert('You are already logged in!');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($pass = $db_pass && $email = $db_email) {
    PhpAlert('Logged in as: ' . $email);
  } else {
    PhpAlert('Wrong email or password');
  }
} else {
  header("Location: ./views/index.php");
}

$_SESSION["email"] = "$email";

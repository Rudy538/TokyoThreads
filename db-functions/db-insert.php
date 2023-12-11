<?php
session_start();
include_once("db-conn.php");

$email = $_POST["email"];
$pass = $_POST["pass"];

$stmt = "INSERT INTO users (email, pass) VALUES ('$email', '$pass')";
$query = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($conn, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (mysqli_num_rows($result) > 1) {
        PhpAlert('Email already taken');
    }
    if (isset($_SESSION["email"])) {
        PhpAlert('Log out first');
    } elseif (mysqli_query($conn, $stmt)) {
        PhpAlert('Signed in successfully');
    }
} else {
    header("Location: ./views/index.php");
}

mysqli_close($conn);

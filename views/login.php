<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../icons/logo-ico.png">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Pixelify+Sans&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <title> Tokyo Threads </title>
</head>

<body>
    <div class="dark-bg"></div>
    <div class="main">

        <?php include_once("../includes/header.php") ?>

        <form action="../db-functions/db-select.php" method="post">

            <p class="login-text"> LOGIN </p>

            <input type="text" placeholder="email" name="email">

            <input type="password" placeholder="password" name="pass">

            <p class="Fpass"> Forgot password? </p>

            <button type="submit"> Log In </button>

        </form>

    </div>
</body>

</html>
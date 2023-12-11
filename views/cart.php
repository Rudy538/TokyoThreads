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
    <link rel="stylesheet" href="../styles/products-container.css">
    <link rel="stylesheet" href="../styles/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Pixelify+Sans&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <title> Tokyo Threads </title>
</head>

<body>
    <div class="dark-bg"></div>
    <div class="main">

        <?php include_once("../includes/header.php") ?>

        <div class="content">
            <?php
            if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
                echo 'You are logged in';
            } else {
                echo 'You must log in first';
            }
            ?>
        </div>
    </div>

</body>

</html>
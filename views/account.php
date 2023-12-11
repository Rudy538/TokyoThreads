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
    <link rel="stylesheet" href="../styles/account.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Pixelify+Sans&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <title> Tokyo Threads </title>
</head>

<body>
    <div class="dark-bg"></div>
    <div class="main">

        <?php include_once("../includes/header.php") ?>

        <div class="content">
            <?php
            include('../db-functions/db-conn.php');
            echo "You are logged in as:" . " " . $_SESSION["email"];

            if (isset($_POST['logOut'])) {
                session_destroy();
                session_unset();
                header('Location: ./index.php');
            }
            ?>
            <form method="POST">
                <button type="submit" class="logOut" name="logOut">Log out</button>
            </form>
        </div>

    </div>
</body>

</html>
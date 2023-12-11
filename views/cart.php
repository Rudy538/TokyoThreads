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
        <div class="header">
            <script type="text/javascript" src="../Js/dropdown/dropdown.js"></script>
            <div class="dropdown-lang">
                <button class="dropdown-lang-bt" onclick="dropdown('dropdown-lang-content')"><img class="dropdown-lang-img" src="../icons/earth.png"></button>
                <div id="dropdown-lang-content" class="dropdown-lang-content">
                    <a href="#">EN</a>
                    <a href="#">PL</a>
                </div>
            </div>
            <div class="logo">
                <a href="./index.php">
                    <p> TOKYO THREADS </p>
                </a>
            </div>

            <div class="right">

                <div class="dropdown-login">
                    <button class="dropdown-login-bt" onclick="dropdown('dropdown-login-content')">
                        <?php
                        if (isset($_SESSION["email"]) && isset($_SESSION["pass"])) {
                            echo '<img class="dropdown-login-img" src="../icons/user-logged.png" alt="user-logged" style="width: 25px;">';
                        } else {
                            echo '<img class="dropdown-login-img"  src="../icons/user.png" alt="user-not-logged" style="width: 25px;">';
                        }
                        ?>
                    </button>
                    <div id="dropdown-login-content" class="dropdown-login-content">
                        <a href="./login.php">Log In</a>
                        <a href="./register.php">Sign Up</a>
                        <?php
                        if (isset($_SESSION["email"]) && isset($_SESSION["pass"])) {
                            echo '<a href="./account.php">Account</a>';
                        } else {
                            echo '';
                        }
                        ?>
                    </div>
                </div>
                <a href="./cart.php"><button class="cart"><img src="../icons/cart.png"></button></a>
            </div>

            <div class="nav">
                <a href="#">
                    <p> ALL </p>
                </a>
                <a href="#">
                    <p> T-Shirts </p>
                </a>
                <a href="#">
                    <p> Hoodies </p>
                </a>
            </div>

        </div>

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
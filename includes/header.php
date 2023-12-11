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
                <?php
                if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
                    echo '<a href="./cart.php"><button class="cart"><img src="../icons/cart.png"></button></a>';
                }
                ?>
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
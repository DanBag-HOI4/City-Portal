<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../baginproject/css/styles.css">
    <title>Городской портал</title>
</head>
<body>

    <div class="container">

        <header>
            <div class="header_container">

                <div class="logo">
                    <p>City-Portal</p>
                </div>

                <div class="menu">
                    <a href="">Главная</a>
                    <a href="">FAQ</a>
                </div>

                <div class="right_menu">
                    <?php

                    if(!isset($_SESSION["user"])) {
                        echo '<a href="../baginproject/vendor/signin.php">Войти</a>';
                        echo '<a href="../baginproject/vendor/signup.php">Зарегистрироваться</a>';
                    } else {
                        echo '<a href="../baginproject/vendor/cabinet.php">Личный кабинет</a>';
                    }
                    ?>

                </div>

            </div>

        </header>

        <main></main>

        <footer></footer>

    </div>
        
</body>
</html>
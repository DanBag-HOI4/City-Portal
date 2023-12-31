<?php
session_start();
require_once "./vendor/connect.php";

$troubles = get_troubles($connect);

$last_four = mysqli_query($connect, "SELECT * FROM `troubles` WHERE `status` = 'решена' ORDER BY `date` DESC LIMIT 4");
$last_four = mysqli_fetch_all($last_four);
$counter = mysqli_query($connect, "SELECT * FROM `troubles` WHERE `status` = 'решена'");
$counter = mysqli_num_rows($counter)

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
                    } if(isset($_SESSION["user"])) {
                        if($_SESSION["user"]["role"] == "0") {
                            echo '<a href="../baginproject/vendor/cabinet.php">Личный кабинет</a>';
                        } else {
                            echo '<a href="../baginproject/vendor/admin.php">Личный кабинет</a>';
                        }
                    }

                    ?>

                </div>

            </div>

        </header>

        <main>

            <div class="main_container">
                
                <h1 class="main_title">Последние решённые проблемы:</h1>
                <p class="counter">Счётчик решённых проблемы: <?=$counter?></p>

                <div class="application">

                    <?php
                    foreach($last_four as $item) {
                    ?>

                        <div class="app_card">
                            <p>Проблема: <?=$item[2]?></p>
                            <p>Описание проблемы: <?=$item[3]?></p>
                            <p>Категория проблемы: <?=$item[4]?></p>
                            <p>Дата отправки заявки: <?=$item[7]?></p>
                            <img class="photo1" src="<?=$item[5]?>" alt="">
                            <p>Статус заявки: <?=$item[6]?></p>
                            <a href="./vendor/solved.php?id=<?=$item[0]?>">Фото решённой проблемы</a>
                        </div>

                    <?php
                    }
                    ?>

                </div>
                
            </div>

        </main>

        <footer></footer>

    </div>
        
</body>
</html>
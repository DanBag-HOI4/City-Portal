<?php

session_start();
require_once "./connect.php";

$troubles = mysqli_query($connect, "SELECT * FROM `troubles`");
$troubles = mysqli_fetch_all($troubles);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/my_apps.css">
    <title>Document</title>
</head>

<body>

    <header>

        <div class="header_container">

            <div class="logo">
                <p>City-Portal</p>
            </div>

            <div class="menu">
                <a href="../index.php">Главная</a>
                <a href="">FAQ</a>
            </div>

        </div>

    </header>

    <hr>

    <main>

    <div class="apps">

        <a href="./cabinet.php">Редактор заявок</a>
        <a href="./my_apps.php">Мои заявки</a>
        <a class="logout" href="./logout.php">Выйти</a>

    </div>

        <div class="main_container">

            <div class="application">

                <?php
                foreach($troubles as $item) {
                ?>
                
                    <div class="<?="app_card"?>">
                        <p>Проблема: <?=$item[2]?></p>
                        <p>Описание проблемы: <?=$item[3]?></p>
                        <p>Категория проблемы: <?=$item[4]?></p>
                        <img src="<?="../" . $item[5]?>" alt="">
                        <p>Статус заявки: <?

                            if($item[6] == 0) {
                                echo "новая";
                            }
                            if($item[6] == 1) {
                                echo "решена";
                            }
                            if($item[6] == 2) {
                                echo "отклонена";
                            }?>
                        </p>
                        <?
                        if($item[6] == "1") {
                            ?>
                            <p>Фото решённой проблемы</p>
                            <img src="<?="../" . $item[8]?>" alt="">
                            <?
                        }
                        ?>
                    </div>

                <?php
                }
                ?>

            </div>

        </div>

    </main>

    <footer>

    </footer>

</body>
</html>
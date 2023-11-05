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
    <link rel="stylesheet" href="../css/admin_apps.css">
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

        <a href="./admin_apps.php">Заявки</a>
        <a class="logout" href="./logout.php">Выйти</a>

    </div>

        <div class="main_container">

            <div class="application">

                <?php
                foreach($troubles as $item) {
                ?>
                
                    <div class="<?="app_card"?>">
                        <p>Заявки пользователя: <?=$item[1]?></p>
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
                        <a href="./admin_update_apps.php?id=<?=$item[0]?>">Изменить статус заявки</a>
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
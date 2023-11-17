<?php

session_start();
require_once "./connect.php";

if(isset($_POST["sort_id"])) {
    $id = strip_tags($_POST["sort_id"]);
    $troubles = get_troubles($connect, $id);
    foreach($troubles as $item) {
        $item[5] = "../" . $item[5];
        $item[8] = "../" . $item[8];
        printf('
        <div class="app_card">
            <p>Проблема: %s</p>
            <p>Описание проблемы: %s</p>
            <p>Категория проблемы: %s</p>
            <p>Дата отправки заявки: %s</p>
            <img src="%s" alt="">
            <p>Статус заявки: %s</p>
            <a href="./solved.php?id=%s">Фото решённой проблемы</a>
            <a href="./admin_update_apps.php?id=%s">Изменить статус заявки</a>
        </div>
        ', $item[2], $item[3], $item[4], $item[7], $item[5], $item[6], $item[0], $item[0]);
    }
    exit();
} else {
    $troubles = get_troubles($connect);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

            <div class="search_and_sort">

                <div class="sort">
                    <p>Сортировать:</p>
                    <p>По дате (<a id="date-new" href="">сначала новые</a> / <a id="date-old" href="">сначала старые</a>)</p>
                </div>
                
                <div class="search">
                    <input type="search" name="" id="" placeholder="Поиск">
                </div>

                <form class="add_cat" method="post" action="./cabinet.php">
                    <label for="add_cat">Добвление категории</label>
                    <input type="text" name="add_cat" id="add_cat">
                    <button type="submit">Добавить категорию</button>
                </form>

            </div>

            <div class="application">

                <?php
                foreach($troubles as $item) {
                    $item[5] = "../" . $item[5];
                    $item[8] = "../" . $item[8];
                ?>
                
                    <div class="app_card">
                        <p>Проблема: <?=$item[2]?></p>
                        <p>Описание проблемы: <?=$item[3]?></p>
                        <p>Категория проблемы: <?=$item[4]?></p>
                        <p>Дата отправки заявки: <?=$item[7]?></p>
                        <img class="photo1" src="<?=$item[5]?>" alt="">
                        <p>Статус заявки: <?=$item[6]?></p>
                        <a href="./solved.php?id=<?=$item[0]?>">Фото решённой проблемы</a>
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

    <script src="../js/script.js"></script>

</body>
</html>
<?php

session_start();
require_once "./connect.php";

if (isset($_POST["sort_id"])) {
    $id = strip_tags($_POST["sort_id"]);
    $troubles = get_troubles($connect, $id);
    foreach ($troubles as $item) {

?>

        <div class="app_card">
            <p>Заявка #<?= $item[0] ?></p>
            <p>Заявка пользователя #<?= $item[1] ?></p>
            <p>Проблема: <?= $item[2] ?></p>
            <p>Описание проблемы: <?= $item[3] ?></p>
            <p>Категория проблемы: <?= $item[4] ?></p>
            <p>Дата отправки заявки: <?= $item[7] ?></p>
            <div class="img_wrapper">
                <img class="photo1" src="<?= "../" . $item[5] ?>" alt="">
                <? if ($item[8] !== NULL) {
                ?>
                    <img class="photo2" src="<?= "../" . $item[8] ?>" alt="">
                <?
                } else {
                ?>
                    <p class="photo3">Проблема ещё не решена</p>
                <?
                }
                ?>
            </div>
            <p>Статус заявки: <?= $item[6] ?></p>
            <a href="./admin_update_apps.php?id=<?= $item[0] ?>">Редактировать заявку</a>
        </div>

<?php

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

    <div class="wrapper">

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

                    <div class="sort2">
                        <p>Сортировать:</p>
                        <p>По дате (<a id="date-new" href="">сначала новые</a> / <a id="date-old" href="">сначала старые</a>)</p>
                    </div>

                    <div class="search">
                        <input type="search" name="" id="" placeholder="Поиск">
                    </div>

                </div>

                <div class="application">

                    <?php
                    foreach ($troubles as $item) {

                    ?>

                        <div class="app_card">
                            <p>Заявка #<?= $item[0] ?></p>
                            <p>Заявка пользователя #<?= $item[1] ?></p>
                            <p>Проблема: <?= $item[2] ?></p>
                            <p>Описание проблемы: <?= $item[3] ?></p>
                            <p>Категория проблемы: <?= $item[4] ?></p>
                            <p>Дата отправки заявки: <?= $item[7] ?></p>
                            <div class="img_wrapper">
                                <img class="photo1" src="<?= "../" . $item[5] ?>" alt="">
                                <? if ($item[8] !== NULL) {
                                ?>
                                    <img class="photo2" src="<?= "../" . $item[8] ?>" alt="">
                                <?
                                } else {
                                ?>
                                    <p class="photo3">Проблема ещё не решена</p>
                                <?
                                }
                                ?>
                            </div>
                            <p>Статус заявки: <?= $item[6] ?></p>
                            <a href="./admin_update_apps.php?id=<?= $item[0] ?>">Изменить статус заявки</a>
                        </div>

                    <?php

                    }

                    ?>

                </div>

            </div>

        </main>

        <footer>

        </footer>

    </div>

    <script src="../js/script.js"></script>

</body>

</html>
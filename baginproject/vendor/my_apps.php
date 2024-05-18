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
            <p>Проблема: <?= $item[2] ?></p>
            <p>Описание проблемы: <?= $item[3] ?></p>
            <p>Категория проблемы: <?= $item[4] ?></p>
            <p>Дата отправки заявки: <?= $item[7] ?></p>
            <div class="img_wrapper">
            <img class="photo1" src="<?= "../" . $item[5] ?>" alt="">
            <? if ($item[6]=="решена" ) {
            ?>
                <img class="photo2" src="<?= "../" . $item[8] ?>" alt="">
            <?
            } elseif ($item[6]=="новая") {
            ?>
                <p class="photo3">Проблема ещё не решена</p>
            <?
            } else {
            ?>
            <p class="photo4">Заявка отклонена</p>
            <?  
            }
            ?>
            </div>
            <p>Статус заявки: <?= $item[6] ?></p>
            <?
            if($item[6]=="отклонена") {
            ?>
            <p>Причина отклонения заявки: <?= $item[10] ?></p>
            <?
            }
            ?>
            <?
            if ($item[6]!="решена" ) {
            ?>
            <a href="./update_apps.php?id=<?= $item[0] ?>">Редактировать заявку</a>
            <a href="./delete_apps.php?id=<?= $item[0] ?>">Удалить заявку</a>
            <?
            }
            ?>
        </div>

    <?php
    }
    exit();
} else {
    $troubles = get_troubles($connect);
}

if (isset($_POST["filter_id"])) {
    $id = strip_tags($_POST["filter_id"]);
    $troubles = get_troubles($connect, $filter_id);
    foreach ($troubles as $item) {

?>

        <div class="app_card">
            <p>Заявка #<?= $item[0] ?></p>
            <p>Проблема: <?= $item[2] ?></p>
            <p>Описание проблемы: <?= $item[3] ?></p>
            <p>Категория проблемы: <?= $item[4] ?></p>
            <p>Дата отправки заявки: <?= $item[7] ?></p>
            <div class="img_wrapper">
            <img class="photo1" src="<?= "../" . $item[5] ?>" alt="">
            <? if ($item[6]=="решена" ) {
            ?>
                <img class="photo2" src="<?= "../" . $item[8] ?>" alt="">
            <?
            } elseif ($item[6]=="новая") {
            ?>
                <p class="photo3">Проблема ещё не решена</p>
            <?
            } else {
            ?>
            <p class="photo4">Заявка отклонена</p>
            <?  
            }
            ?>
            </div>
            <p>Статус заявки: <?= $item[6] ?></p>
            <?
            if($item[6]=="отклонена") {
            ?>
            <p>Причина отклонения заявки: <?= $item[10] ?></p>
            <?
            }
            ?>
            <?
            if ($item[6]!="решена" ) {
            ?>
            <a href="./update_apps.php?id=<?= $item[0] ?>">Редактировать заявку</a>
            <a href="./delete_apps.php?id=<?= $item[0] ?>">Удалить заявку</a>
            <?
            }
            ?>
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
    <link rel="stylesheet" href="../css/my_apps.css">
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

                <div class="search_and_sort">

                    <div class="search">
                        <input type="search" name="" id="" placeholder="Поиск">
                    </div>

                    <div class="sort_and_filter">

                        <div class="sort">
                            <button>Сортировать</button>
                            <div class="sort_block">
                                <p>По дате</p>
                                <div>(<a id="date-new" href="">сначала новые</a> / <a id="date-old" href="">сначала старые</a>)</div>
                            </div>
                        </div>

                        <div class="filter">
                            <button>Фильтровать</button>
                            <div class="filter_block">
                                <a id="new">Новые заявки</a>
                                <a id="solved">Решённые заявки</a>
                                <a id="rejected">Отклонённые заявки</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="application">

                    <?php
                    if ($troubles) {


                        foreach ($troubles as $item) {
                    ?>

                            <div class="app_card">
                                <p>Заявка #<?= $item[0] ?></p>
                                <p>Проблема: <?= $item[2] ?></p>
                                <p>Описание проблемы: <?= $item[3] ?></p>
                                <p>Категория проблемы: <?= $item[4] ?></p>
                                <p>Дата отправки заявки: <?= $item[7] ?></p>
                                <div class="img_wrapper">
                                <img class="photo1" src="<?= "../" . $item[5] ?>" alt="">
                                <? if ($item[6]=="решена" ) {
                                ?>
                                    <img class="photo2" src="<?= "../" . $item[8] ?>" alt="">
                                <?
                                } elseif ($item[6]=="новая") {
                                ?>
                                    <p class="photo3">Проблема ещё не решена</p>
                                <?
                                } else {
                                ?>
                                <p class="photo4">Заявка отклонена</p>
                                <?  
                                }
                                ?>
                                </div>
                                <p>Статус заявки: <?= $item[6] ?></p>
                                <?
                                if($item[6]=="отклонена") {
                                ?>
                                <p>Причина отклонения заявки: <?= $item[10] ?></p>
                                <?
                                }
                                ?>
                                <?
                                if ($item[6]!="решена" ) {
                                ?>
                                <a href="./update_apps.php?id=<?= $item[0] ?>">Редактировать заявку</a>
                                <a href="./delete_apps.php?id=<?= $item[0] ?>">Удалить заявку</a>
                                <?
                                }
                                ?>
                            </div>

                    <?php

                        }
                    }
                    ?>

                </div>

            </div>

        </main>

        <footer>

        </footer>

    </div>

    <script>
        $(document).ready(function() {
                $(".sort button").click(function() {
                    $(".sort_block").toggle();
                });
                $(".filter button").click(function() {
                    $(".filter_block").toggle();
                });
        });

    </script>
    <script src="../js/script.js"></script>

</body>

</html>
<?php
require_once "./connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cabinet.css">
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
            </div>

        </div>

    </header>

    <hr>

    <main>

    <div class="apps">

        <a href="./admin_apps.php">Заявки</a>
        <a href="./admin.php">Категории</a>
        <a class="logout" href="./logout.php">Выйти</a>
    </div>

    <div class="main_container">
        <form class="category" action="./addcat.php" method="post">
            <p>Добавьте категорию</p>
            <input type="text" name="addcat" required>
            <button type="submit">Отправить</button>
        </form>

        <div class="catlist">
            <h1>Список категорий:</h1>
            <div class="catlist2">
            <?
            foreach($categories as $item) {
                ?>
                <div class="catlist3">
                    <p><?=$item[1]?></p>
                    <div class="cat_btns">
                        <a href="./updcat.php?id=<?= $item[0] ?>"><button>Редактировать</button></a>
                        <a href="./delcat.php?id=<?= $item[0] ?>"><button class="ggg">Удалить</button></a>
                    </div>
                </div>
                <?
            }
             ?>
            </div>
        </div>


    </div>
    

    </main>

    <footer>

    </footer>

</body>
</html>
<?
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
                <a href="">Главная</a>
                <a href="">FAQ</a>
            </div>

        </div>

    </header>

    <main>

        <div class="main_container">

            <div class="apps">
                <h2>Заявки</h2>
                <p>Редактор заявок</p>
                <p>Мои новые заявки</p>
                <p>Мои решённые заявки</p>
                <p>Мои отклонённые заявки</p>
                <a class="logout" href="./logout.php">выйти</a>
            </div>

            <div class="application">
                <form action="./application_create.php" method="post" enctype="multipart/form-data">
                    <label for="app_name">Название проблемы</label>
                    <input type="app_name" name="app_name" id="app_name" placeholder="">
                    <label for="app_desc">Описание проблемы</label>
                    <input type="textarea" name="app_desc" id="app_desc" placeholder="">
                    <label for="app_cat">Выберите категорию проблемы</label>
                    <select name="app_cat" id="app_cat"> 
                        <option value="ремонт дорог">ремонт дорог</option> 
                        <option value="уборка мусора">уборка мусора</option> 
                        <option value="другое">другое</option> 
                    </select>
                    <input type="file" name="app_photo">
                    <button type="submit">Отправить данные</button>
                </form>
            </div>

        </div>

    </main>

    <footer>

    </footer>

</body>
</html>
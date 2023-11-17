<?
session_start();
$app_add = $_POST["add_cat"];
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
                <a href="">FAQ</a>
            </div>

        </div>

    </header>

    <hr>

    <main>

    <div class="apps">

        <p>Редактор заявок</p>
        <a href="./my_apps.php">Мои заявки</a>
        <a class="logout" href="./logout.php">Выйти</a>

    </div>

        <div class="main_container">

            <div class="application">

                <form action="./application_create.php" method="post" enctype="multipart/form-data">
                    <label for="app_name">Название проблемы</label>
                    <input type="app_name" name="app_name" id="app_name" placeholder="" required>
                    <label for="app_desc">Описание проблемы</label>
                    <textarea type="textarea" name="app_desc" id="app_desc" placeholder="" rows="5" cols="33" maxlength="300" required></textarea>
                    <label for="app_cat">Выберите категорию проблемы</label>
                    <select name="app_cat" id="app_cat" required> 
                        <option value="ремонт дорог">ремонт дорог</option> 
                        <option value="уборка мусора">уборка мусора</option> 
                        <option value="другое">другое</option>               
                    </select>
                    <label for="app_photo">Фотография проблемы</label>
                    <input type="file" name="app_photo" id="app_photo" required>
                    <button type="submit">Отправить данные</button>
                </form>

            </div>

        </div>

    </main>

    <footer>

    </footer>

</body>
</html>
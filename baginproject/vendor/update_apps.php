<? 

session_start();
require_once "./connect.php";

$id = $_GET["id"];

$app = mysqli_query($connect, "SELECT * FROM `troubles` WHERE `id` = '$id'");
$app = mysqli_fetch_assoc($app);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/admin_update_apps.css">
    <title>Document</title>
</head>
<body>

        <pre>
            <?
            print_r($app);
            ?>
        </pre>

    <form action="./admin_update_apps_create.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value ="<?= $id ?>">
        <label for="app_name">Название проблемы</label>
        <input type="text" name="app_name" id="app_name" value="<?=$app["name"]?>">
        <label for="app_desc">Описание проблемы</label>
        <textarea maxlength="500" name="app_desc" id="app_desc"><?=$app["description"]?></textarea>
        <label for="app_photo">Фотография проблемы</label>
        <input class="photo" type="file" name="app_photo" id="app_photo">
        <button type="submit">Отправить данные</button>
    </form>

</div>
<script src="../js/script.js"></script>
</body>
</html>
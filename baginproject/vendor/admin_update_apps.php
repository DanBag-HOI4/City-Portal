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
        <label for="status">Укажите статус заявки</label>
        <select name="status" id="status" required> 
            <?
            if($app[6]) {

            }
            ?>
            <option value="новая">новая</option> 
            <option class="solved" value="решена">решена</option> 
            <option value="отклонена">отклонена</option> 
        </select>
        <label class="label_photo" for="add_photo2">Фотография решённой проблемы</label>
        <input class="add_photo2" type="file" name="app_photo2" id="app_photo2">
        <label class="app_reason_label" for="app_reason">Причина отклонения заявки</label>
        <textarea class="reason" name="app_reason" id="app_reason"></textarea>
        <button class="status_update" type="submit">Отправить данные</button>
    </form>

</div>
<script src="../js/script.js"></script>
</body>
</html>
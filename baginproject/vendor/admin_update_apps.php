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
        <label for="">Укажите статус заявки (Напишите '1' если заявка решена. Напишите '2' если заявка отклонена)</label>
        <input type="text" name="status" placeholder="Напишите '1' если заявка решена. Напишите '2' если заявка отклонена" value="<?=$app["status"]?>" required>
        <label for="app_photo2">Фотография решённой проблемы</label>
        <input type="file" name="app_photo2" id="app_photo2" required>
        <button type="submit">Отправить данные</button>
    </form>

</div>
</body>
</html>
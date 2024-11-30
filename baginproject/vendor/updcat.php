<?php
session_start();
require_once "./connect.php";
$id = $_GET["id"];
$cat = mysqli_query($connect, "SELECT * FROM `category` WHERE `id` = '$id'");
$cat = mysqli_fetch_all($cat);
foreach ($cat as $item) {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="catupd" action="./updcat_c.php" method="post">
        <input type="hidden" name="id" value ="<?= $id ?>">
        <p>Измените имя категории:</p>
        <input type="text" name="updcat" value="<?=$item[1]?>" required>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
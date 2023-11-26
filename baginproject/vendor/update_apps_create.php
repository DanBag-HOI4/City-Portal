<?php

session_start();
require_once "./connect.php";

$id = $_POST["id"];
$name = $_POST["app_name"];
$t = time();
$t2 = date("Y-m-d-H:i:s", $t);
$app_desc = $_POST["app_desc"];
$app_cat = $_POST["app_cat"];

if($_FILES["app_photo"]["tmp_name"][0]) {
    $app_photo = "img/uploads/" . time() . $_FILES["app_photo"]["name"];
    move_uploaded_file($_FILES["app_photo"]["tmp_name"], "../" . $app_photo);
    mysqli_query($connect, "UPDATE `troubles` SET `name` = '$name', `date` = '$t2', `description` = '$app_desc', `photo` = '$app_photo', `category` = '$app_cat'  WHERE `troubles`.`id` = '$id'");
} else {
    mysqli_query($connect, "UPDATE `troubles` SET `name` = '$name', `date` = '$t2', `description` = '$app_desc'  WHERE `troubles`.`id` = '$id'");
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
    <pre>
        <?
            echo $app_photo2;
        ?>
    </pre>
</body>
</html>
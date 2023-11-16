<?php

session_start();
require_once "./connect.php";

$id = $_POST["id"];

if($_FILES) {
    $app_photo = "img/uploads/" . time() . $_FILES["app_photo"]["name"];
    move_uploaded_file($_FILES["app_photo"]["tmp_name"], "../" . $app_photo2);
}

$t = time();
$t2 = date("Y-m-d-H:i:s", $t);

mysqli_query($connect, "UPDATE `troubles` SET `date` = '$t2' WHERE `troubles`.`id` = '$id'");
mysqli_query($connect, "UPDATE `troubles` SET `status` = '$app_status' WHERE `troubles`.`id` = '$id'");

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
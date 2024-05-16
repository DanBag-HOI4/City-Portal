<?php

session_start();
require_once "./connect.php";

$id = $_POST["id"];
$app_status = $_POST["status"];
$app_reason = $_POST["app_reason"];

if($_FILES["app_photo2"]) {
    $app_photo2 = "img/uploads/" . time() . $_FILES["app_photo2"]["name"];
    move_uploaded_file($_FILES["app_photo2"]["tmp_name"], "../" . $app_photo2);
    $t = time();
    $t2 = date("Y-m-d-H:i:s", $t);
    mysqli_query($connect, "UPDATE `troubles` SET `status` = '$app_status', `photo2` = '$app_photo2', `date2` = '$t2', `reason` = '$app_reason' WHERE `troubles`.`id` = '$id'");
} else {
    mysqli_query($connect, "UPDATE `troubles` SET `status` = '$app_status', `reason` = '$app_reason' WHERE `troubles`.`id` = '$id'");
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
    <pre>
        <?
            echo $_FILES["app_photo2"]["tmp_name"];
        ?>
    </pre>
</body>
</html>
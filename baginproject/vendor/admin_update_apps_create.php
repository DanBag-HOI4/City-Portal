<?php

session_start();
require_once "./connect.php";

$id = $_POST["id"];

$app_status = $_POST["status"];
$app_photo2 = "img/uploads/" . time() . $_FILES["app_photo2"]["name"];
move_uploaded_file($_FILES["app_photo2"]["tmp_name"], "../" . $app_photo2);
$t = time();
$t2 = date("Y-m-d-H:i:s", $t);

mysqli_query($connect, "UPDATE `troubles` SET `status` = '$app_status', `photo2` = '$app_photo2', `date2` = '$t2' WHERE `troubles`.`id` = '$id'");

?>
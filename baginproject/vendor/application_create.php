<?php

session_start();
require_once "./connect.php";

$app_name = $_POST["app_name"];
$app_desc = $_POST["app_desc"];
$app_cat = $_POST["app_cat"];
?>
<pre>
    <?print_r($app_cat);?>
</pre>
<?
$app_photo = "img/uploads/" . time() . $_FILES["app_photo"]["name"];
move_uploaded_file($_FILES["app_photo"]["tmp_name"], "../" . $app_photo);
$app_status = "новая";
$user_id = $_SESSION["user"]["id"];
$t = time();
$t2 = date("Y-m-d-H:i:s", $t);

var_dump($_FILES);


mysqli_query($connect, "INSERT INTO `troubles` (`id`, `user_id`, `name`, `description`, `category`, `photo`, `status`, `date`) VALUES (NULL, '$user_id', '$app_name', '$app_desc', '$app_cat', '$app_photo', '$app_status', '$t2')")
?>
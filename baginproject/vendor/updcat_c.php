<?php
session_start();
require_once "./connect.php";
$id = $_POST["id"];
$cat = $_POST["updcat"];

$updcat = mysqli_query($connect, "UPDATE `category` SET `category` = '$cat'  WHERE `id` = '$id'");
header("Location: ./admin.php")
?>
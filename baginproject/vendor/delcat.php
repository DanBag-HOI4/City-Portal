<?php
session_start();
require_once "./connect.php";
$id = $_GET["id"];

$delcat = mysqli_query($connect,"DELETE FROM category WHERE id = '$id'");

?>
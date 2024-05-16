<?php
session_start();
require_once "./connect.php";
$id = $_GET["id"];

$delapp = mysqli_query($connect,"DELETE FROM troubles WHERE id = '$id'");
?>
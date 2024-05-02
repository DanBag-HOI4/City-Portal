<?php

require_once "./connect.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$otchestvo = $_POST["otchestvo"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirm = $_POST["password_confirm"];
$hidden_password = md5($password); 
mysqli_query($connect, "INSERT INTO `users` (`id`, `first_name`, `last_name`, `otchestvo`, `login`, `email`, `password`, `role`) VALUES (NULL, '$first_name', '$last_name', '$otchestvo', '$login', '$email', '$hidden_password', 0)");

header("Location: ../index.php")

?>
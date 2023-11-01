<?php
$connect = mysqli_connect("localhost", "root", "root", "baginproject");
if(!$connect) {
    die("error");
}
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$date_of_birth = $_POST["date_of_birth"];
$password = $_POST["password"];
mysqli_query($connect, "INSERT INTO `users` (`first_name`, `last_name`, `email`, `date_of_birth`, `password`, `id`) VALUES ('$first_name', '$last_name', $email, '$date_of_birth', '$password', NULL)");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Ваше имя: <?echo $first_name?></p>
    <p>Ваша фамилия: <?echo $last_name?></p>
    <p>Ваш город: <?echo $city?></p>
</body>
</html>
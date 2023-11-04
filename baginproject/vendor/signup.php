<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/auth.css">
    <title>Document</title>
</head>
<body>
    <form action="../vendor/auth.php" method="post">
        <label for="last_name">Введите вашу фамилию</label>
        <input type="text" name="last_name" id="last_name" placeholder="Иван">
        <label for="first_name">Введите ваше имя</label>
        <input type="text" name="first_name" id="first_name" placeholder="Иванов">
        <label for="otchestvo">Введите ваше отчество (при наличии)</label>
        <input type="text" name="otchestvo" id="otchestvo" placeholder="Иванович">
        <label for="login">Придумайте ваш логин</label>
        <input type="text" name="login" id="login" placeholder="Ivanov70">
        <label for="email">Введите вашу почту</label>
        <input type="email" name="email" id="email" placeholder="ivan.ivanov@inbox.com">
        <label for="password">Введите ваш пароль</label>
        <input type="password" name="password" id="password" placeholder="********">
        <label for="password_confirm">Введите ваш пароль ещё раз</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="********">
        <button type="submit">Отправить данные</button>
    </form>
</body>
</html>
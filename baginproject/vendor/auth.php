<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/baginproject/css/auth.css">
    <title>Document</title>
</head>
<body>
    <form action="/baginproject/vendor/create.php" method="post">
        <label for="last_name">Введите вашу фамилию</label>
        <input type="text" name="last_name" id="last_name" placeholder="Иван">
        <label for="first_name">Введите ваше имя</label>
        <input type="text" name="first_name" id="first_name" placeholder="Иванов">
        <label for="date_of_birth">укажите дату рождения</label>
        <input type="date" name="date_of_birth" id="date_of_birth">
        <label for="email">Введите вашу почту</label>
        <input type="email" name="email" id="email" placeholder="ivan.ivanov@inbox.com">
        <label for="password">Введите ваш пароль</label>
        <input type="password" name="password" id="password" placeholder="********">
        <button type="submit">Отправить данные</button>
    </form>
</body>
</html>
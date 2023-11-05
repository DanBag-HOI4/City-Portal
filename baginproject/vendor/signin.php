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
    <form action="../vendor/entry.php" method="post">
        <label for="login">Введите ваш логин</label>
        <input type="login" name="login" id="login" placeholder="ivan.ivanov@inbox.com" required>
        <label for="password">Введите ваш пароль</label>
        <input type="password" name="password" id="password" placeholder="********" required>
        <button type="submit">Отправить данные</button>
    </form>
</body>
</html>
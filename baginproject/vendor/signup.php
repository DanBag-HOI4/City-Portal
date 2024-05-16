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
        <input type="text" name="last_name" id="last_name" placeholder="Иван" required>
        <label for="first_name">Введите ваше имя</label>
        <input type="text" name="first_name" id="first_name" placeholder="Иванов" required>
        <label for="otchestvo">Введите ваше отчество (при наличии)</label>
        <input type="text" name="otchestvo" id="otchestvo" placeholder="Иванович" required>
        <label for="login">Придумайте ваш логин</label>
        <input type="text" name="login" id="login" placeholder="Ivanov70" required>
        <label for="email">Введите вашу почту</label>
        <input type="email" name="email" id="email" placeholder="ivan.ivanov@inbox.com" required>
        <label for="password">Введите ваш пароль</label>
        <input type="password" name="password" id="password" placeholder="********" required>
        <label for="password_confirm">Введите ваш пароль ещё раз</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="********" required>
        <div class="checkblock">
            <input type="checkbox" name="check" id="check" required>
            <p>Согласие на обработку персональных данных</p>
        </div>
        <button type="submit">Отправить данные</button>
    </form>
</body>
</html>
<?
session_start();
require_once "./connect.php";

$id = $_GET["id"];

$app = mysqli_query($connect, "SELECT * FROM `troubles` WHERE `id` = '$id'");
$app = mysqli_fetch_assoc($app);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display:flex;
        justify-content:center;
        align-items:center;
        height: 100vh;
    }
</style>
<body>
    <img class="photo2" src="<?="../" . $app["photo2"]?>" alt="">
</body>
</html>
<?
require_once "./connect.php";

$addcat = $_POST["addcat"];

mysqli_query($connect, "INSERT INTO `category` (`id`, `category`) VALUES (NULL, '$addcat')");
header("Location: ./admin_apps.php");

// mysqli_fetch_array($connect);
?>
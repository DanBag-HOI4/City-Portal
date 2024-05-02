<?php
$connect = mysqli_connect("localhost", "root", "", "portal-city");
if(!$connect) {
    die("error");
}

$filter = $_POST["filter"];

if(isset($user_id)) {
    $sql2 = "SELECT * FROM `troubles` WHERE `user_id` = '$user_id'";
}

$categories = mysqli_query($connect, "SELECT * FROM `category`");
$categories = mysqli_fetch_all($categories);

function get_troubles($connect, $id = FALSE, $sortdiv = FALSE, $filter = FALSE) {
    if(isset($_SESSION["user"])) {
        if($_SESSION["user"]["role"] == 0) {
            $user_id = $_SESSION["user"]["id"];
            $sql = "SELECT * FROM `troubles` WHERE `user_id` = '$user_id'";
        }
        else {
            $sql = "SELECT * FROM `troubles`";
        }
    } else {
        $sql = "SELECT * FROM `troubles`";
    }

    if($filter) {
        if($filter == "new") {
            $sql .=" and `status` = 'новая'";
        }
        else if($filter == "solved") {
            $sql .=" and `status` = 'решена'";
        }
        else if($filter == "rejected") {
            $sql .=" and `status` = 'отклонена'";
        }
    }
    
    if($id) {
        if($id == "date-old") {
            $sql .=" ORDER BY `date` ASC";
        }
        else if($id == "date-new") {
            $sql .=" ORDER BY `date` DESC";
        }
    }
    $result = mysqli_query($connect, $sql);
    for($i = 0; $i<mysqli_num_rows($result); $i++) {
        $troubles[] = mysqli_fetch_array($result);
    }

    if(isset($troubles)) {
        return $troubles;
    }
}
?>
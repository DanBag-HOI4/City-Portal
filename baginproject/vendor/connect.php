<?php
$connect = mysqli_connect("localhost", "root", "", "Portal-City");
if(!$connect) {
    die("error");
}

function get_troubles($connect, $id = FALSE, $sortdiv = FALSE) {
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

    if($sortdiv) {
        if($sortdiv == "new") {
            $sql .=" WHERE `status` = 'новая'";
        }
        else if($sortdiv == "solved") {
            $sql .=" WHERE `status` = 'решена'";
        }
        else if($sortdiv == "rejected") {
            $sql .=" WHERE `status` = 'отклонена'";
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
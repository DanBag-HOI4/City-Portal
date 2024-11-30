<?php
$connect = mysqli_connect("localhost", "root", "", "portal-city");
if(!$connect) {
    die("error");
}


// if(isset($user_id)) {
//     $sql2 = "SELECT * FROM `troubles` WHERE `user_id` = '$user_id'";
// }

$categories = mysqli_query($connect, "SELECT * FROM `category`");
$categories = mysqli_fetch_all($categories);

// $sortdiv = FALSE, $filter_id = FALSE
function get_troubles($connect, $id = FALSE) {
    if(isset($_SESSION["user"])) {
        if($_SESSION["user"]["role"] == 0) {
            $user_id = $_SESSION["user"]["id"];
            $sql = "SELECT * FROM `troubles` WHERE `user_id` = '$user_id'";
            if($id) {
                if($id == "date-old") {
                    $sql .=" ORDER BY `date` ASC";
                }
                else if($id == "date-new") {
                    $sql .=" ORDER BY `date` DESC";
                }
                else if($id == "new") {
                    $sql .=" and `status` = 'новая'"; 
                }
                else if($id == "solved") {
                    $sql .=" and `status` = 'решена'"; 
                }
                else if($id == "rejected") {
                    $sql .=" and `status` = 'отклонена'"; 
                }
            }
        }
        else {
            $sql = "SELECT * FROM `troubles`";
            if($id) {
                if($id == "date-old") {
                    $sql .=" ORDER BY `date` ASC";
                }
                else if($id == "date-new") {
                    $sql .=" ORDER BY `date` DESC";
                }
                else if($id == "new") {
                    $sql .=" WHERE `status` = 'новая'"; 
                }
                else if($id == "solved") {
                    $sql .=" WHERE `status` = 'решена'"; 
                }
                else if($id == "rejected") {
                    $sql .=" WHERE `status` = 'отклонена'"; 
                }
            }
        }
    } else {
        $sql = "SELECT * FROM `troubles`";
    }
    

    // if($id) {
    //     if($id == "date-old") {
    //         $sql .=" ORDER BY `date` ASC";
    //     }
    //     else if($id == "date-new") {
    //         $sql .=" ORDER BY `date` DESC";
    //     }
    //     else if($id == "new") {
    //         $sql .=" and `status` = 'новая'"; 
    //     }
    //     else if($id == "solved") {
    //         $sql .=" and `status` = 'решена'"; 
    //     }
    //     else if($id == "rejected") {
    //         $sql .=" and `status` = 'отклонена'"; 
    //     }
    // }

    $result = mysqli_query($connect, $sql);
    for($i = 0; $i<mysqli_num_rows($result); $i++) {
        $troubles[] = mysqli_fetch_array($result);
    }

    if(isset($troubles)) {
        return $troubles;
    }
}
?>
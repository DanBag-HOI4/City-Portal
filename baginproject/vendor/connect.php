<?php
$connect = mysqli_connect("localhost", "root", "", "city-portal");
if(!$connect) {
    die("error");
}

function get_troubles($connect, $id = FALSE) {
    $sql = "SELECT * FROM `troubles`";
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

    return $troubles;
}
?>
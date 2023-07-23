<?php
    require_once "db.connect.php";

    $id = $_GET["x"];

    $sql = "SELECT * FROM media WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row["image"] != "placeholder.png"){
        unlink("../images/$row[image]");
    }

    $delete = "DELETE FROM `media` WHERE id = $id";
    if(mysqli_query($connect, $delete)){
        header("Location: index.php");
    }else {
        echo "error";
    }

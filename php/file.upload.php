<?php

    function fileUpload($pic){ 
        if($pic["error"] == 4){
            $pictureName = "placeholder.png";
            $message = "You didn't choose a picture. You can upload it later.";
        }else {
            $checkIfImage = getimagesize($pic["tmp_name"]);
            $message = $checkIfImage ? "Ok" : "Not image";
        }

        if($message == "Ok"){ 
            $ext = strtolower(pathinfo($pic["name"], PATHINFO_EXTENSION));
            $pictureName = uniqid("") . "." . $ext;

            $destination = "../images/{$pictureName}"; 
            move_uploaded_file($pic["tmp_name"], $destination);
        }elseif($message == "Not image") {
            $pictureName = "placeholder.png";
            $message = "That's not an image!";
        }

        return [$pictureName, $message];
    }
?>
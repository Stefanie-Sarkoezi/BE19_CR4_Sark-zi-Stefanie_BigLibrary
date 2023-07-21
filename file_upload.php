<?php

    function fileUpload($pic){ // $_FILES["pictures"]
        if($pic["error"] == 4){
            $pictureName = "product.png";
            $message = "No picture has been chosen, but you can upload an image later :)";
        }else {
            $checkIfImage = getimagesize($pic["tmp_name"]);
            $message = $checkIfImage ? "Ok" : "Not an image";
        }

        if($message == "Ok"){ 
            $ext = strtolower(pathinfo($pic["name"], PATHINFO_EXTENSION));
            $pictureName = uniqid("") . "." . $ext;

            $destination = "pictures/{$pictureName}"; 
            move_uploaded_file($pic["tmp_name"], $destination);
        }elseif($message == "Not an image") {
            $pictureName = "product.png";
            $message = "the file that you chose is not an image!";
        }

        return [$pictureName, $message];
    }
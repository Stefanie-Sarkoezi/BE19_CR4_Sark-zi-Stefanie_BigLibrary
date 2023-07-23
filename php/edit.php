<?php
    require_once "db.connect.php";
    require_once "file.upload.php";

    $id = $_GET["x"];
    $sql = "SELECT * FROM `media` WHERE `id` = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);


    if(isset($_POST["update"])){
        $title = $_POST["title"];
        $ISBN = $_POST["ISBN"];
        $description = $_POST["short_description"];
        $type = $_POST["type"];
        $authorFN = $_POST["author_first_name"];
        $authorLN = $_POST["author_last_name"];
        $publisherName = $_POST["publisher_name"];
        $publisherAddress = $_POST["publisher_address"];
        $publishDate = $_POST["publish_date"];
        $status = $_POST["status"];
        $image = fileUpload($_FILES["image"]);
        

        if($_FILES["image"]["error"] == 0){
            if($row["image"] != "placeholder.png"){
                unlink("../images/$row[image]");
            }

            $sql = "UPDATE `media` SET `title`='$title',`ISBN`='$ISBN',`short_description`='$description',`type`='$type',`author_first_name`='$authorFN',`author_last_name`='$authorLN',`publisher_name`='$publisherName',`publisher_address`='$publisherAddress',`publish_date`='$publishDate', `status`='$status',`image`='$image[0]' WHERE id = $id";
        }else {
            $sql = "UPDATE `media` SET `title`='$title',`ISBN`='$ISBN',`short_description`='$description',`type`='$type',`author_first_name`='$authorFN',`author_last_name`='$authorLN',`publisher_name`='$publisherName',`publisher_address`='$publisherAddress',`publish_date`= '$publishDate',`status`='$status' WHERE id = $id";
        }

        if(mysqli_query($connect, $sql)){
            echo "<div class='alert alert-success' role='alert'>
                    Entry has been updated. {$image[1]}
                </div>";
                header("refresh: 5; url = index.php");
        }else {
            echo "<div class='alert alert-danger' role='alert'>
                Oops! Something went wrong. {$image[1]}
                </div>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="Stylesheet" href="../css/edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"> <img src="../images/logo.png" style="width: 5vw;" >  </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ms-3 me-4">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="create.php">Create product</a>
            </li>
        </ul>
        
        </div>
    </div>
    </nav>

    <div class="headerImage mb-5"></div>

    <div class="text-center">
        <h1 >Edit Entry</h1>
        <hr class="MLLine" style="width:10vw;">
    </div>

    <div class="container mt-5 mb-5">
       <form method="POST" enctype="multipart/form-data"> 
           <div class="mb-3 mt-3">
               <label for="title" class= "form-label">Title:</label>
               <input  type="text" class="form-control" id="title" aria-describedby="title" 
                name="title" value="<?= $row["title"] ?>">
            </div>
            <div class="mb-3">
                <label for="ISBN" class="form-label">ISBN:</label>
                <input type="text" class="form-control"  id="ISBN"  aria-describedby="ISBN"  name="ISBN" value="<?= $row["ISBN"] ?>">
            </div>
            <div class="mb-3">
                <label for="short_description" class="form-label">Short Description:</label>
                <textarea type="text" style="height: 20vh;" class="form-control"  id="short_description"  aria-describedby="short_description"  name="short_description"><?= $row["short_description"] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control"  id="type"  aria-describedby="type"  name="type" value="<?= $row["type"]?>">
            </div>
            <div class="mb-3">
                <label for="author_last_name" class="form-label">Author Last Name:</label>
                <input type="text" class="form-control"  id="author_last_name"  aria-describedby="author_last_name"  name="author_last_name" value="<?= $row["author_last_name"]?>">
            </div>
            <div class="mb-3">
                <label for="author_first_name" class="form-label">Author First Name:</label>
                <input type="text" class="form-control"  id="author_first_name"  aria-describedby="author_first_name"  name="author_first_name" value="<?= $row["author_first_name"]?>">
            </div>
            <div class="mb-3">
                <label for="publisher_name" class="form-label">Publisher:</label>
                <input type="text" class="form-control"  id="publisher_name"  aria-describedby="publisher_name"  name="publisher_name" value="<?= $row["publisher_name"]?>">
            </div>
            <div class="mb-3">
                <label for="publisher_address" class="form-label">Publisher Address:</label>
                <input type="text" class="form-control"  id="publisher_address"  aria-describedby="publisher_address"  name="publisher_address" value="<?= $row["publisher_address"]?>">
            </div>
            <div class="mb-3">
                <label for="publish_date" class="form-label">Publish Date:</label>
                <input type="date" class="form-control"  id="publish_date"  aria-describedby="publish_date"  name="publish_date" value="<?= $row["publish_date"]?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status (How many items available):</label>
                <input type="number" class="form-control"  id="status"  aria-describedby="status"  name="status" value="<?= $row["status"]?>">
            </div>
           <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type = "file" class="form-control" id="image" aria-describedby="image"   name="image">
            </div>
            <button name="update" type="submit" class="btn btn-dark mt-4">Update Product</button>
        </form>
    </div>

    <footer >
        <div class="card text-center bg-black">
            <div class="card-header mt-3">
                <a class="btn btn-dark p-1 m-1" style="width: 3%;" href="#" role="button"><img src="../images/Facebook.png" width="40%" class="m-1"></a>
                <a class="btn btn-dark p-1 m-1" style="width: 3%;" href="#" role="button"><img src="../images/twitter.png" width="90%" class="m-1"></a>
                <a class="btn btn-dark p-1 m-1" style="width: 3%;" href="#" role="button"><img src="../images/instagram.png" width="75%"  class="m-1"></a>
                <a class="btn btn-dark p-1 m-1" style="width: 3%;" href="#" role="button"><img src="../images/google.png" width="75%"  class="m-1"></a>
            </div>
            <span class="card-body input-group input-group-sm  mx-auto p-2" style="width: 40%;" >
                <span class="input-group-text bg-black text-white">Sign up for our newsletter</span>
                <input type="text" name="email" autocomplete="email" class="form-control bg-black" placeholder="example@gmail.com">
                <button class=" btn rounded-end btn-light " type="button" id="button-addon1"> Subscripe</button>
            </span>
            <div class="card-footer text-body-secondary">
                &copy; Stefanie Sarközi
            </div>
          </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
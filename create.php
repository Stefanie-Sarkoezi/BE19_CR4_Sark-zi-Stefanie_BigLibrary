<?php
    require_once "db_connect.php";
    require_once "file_upload.php";

    if(isset($_POST["create"])){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $picture = fileUpload($_FILES["picture"]);

        $sql = "INSERT INTO `products`( `name`, `price`, `picture`) VALUES ('$name',$price,'$picture[0]')";

        if(mysqli_query($connect, $sql)){
            echo "<div class='alert alert-success' role='alert'>
                    New record has been created, {$picture[1]}
                </div>";
                header("refresh: 3; url = index.php");
        }else {
            echo "<div class='alert alert-danger' role='alert'>
                    error found, {$picture[1]}
                </div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
       <h2>Create a new product</ h2>
       <form method="POST" enctype="multipart/form-data"> 
           <div class="mb-3 mt-3">
               <label for="name" class= "form-label">Name</label>
               <input  type="text" class="form-control" id="name" aria-describedby="name" 
name="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control"  id="price"  aria-describedby="price"  name="price">
            </div>
           <div class="mb-3">
                <label for="picture" class="form-label">picture</label>
                <input type = "file" class="form-control" id="picture" aria-describedby="picture"   name="picture">
            </div>
            <button name="create" type="submit" class="btn btn-primary">Create product</button>
            <a href="index.php" class="btn btn-warning">Back to home page</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
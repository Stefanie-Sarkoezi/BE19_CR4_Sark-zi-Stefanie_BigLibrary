<?php
    require_once "db.connect.php";
    $id = $_GET["i"];

    $sql = "SELECT * FROM `media` WHERE `publisher_name` = '$id'";
    $result = mysqli_query($connect, $sql);


    $layout = "";

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $layout .= "<div>
            <div class='card gap-3 mt-5 mb-5 shadow' style='width: 18rem;'>
                <img src='../images/{$row["image"]}' class='card-img-top' alt='...' style='height: 30vh;'>
                <div class='card-body'>
                <h4 class='card-title mb-4 text-center d-flex align-items-center justify-content-center' style='height: 8vh;' >{$row["title"]}</h4>
                <hr class='TitleHR'>
                <p class='card-text mt-5'><b>Author:</b> <br> {$row["author_first_name"]} {$row["author_last_name"]}</p>
                <p class='card-text'> <a href='publisher.php?i={$row["publisher_name"]}' id='publisherBtn'> <b>Publisher:</b><br> {$row["publisher_name"]}, {$row["publisher_address"]} </a></p>
                <p class='card-text mb-5'><b>Publish Date:</b><br> {$row["publish_date"]}</p>
                <div class='buttons text-center'> 
                    <a href='details.php?x={$row["id"]}' class='btn btn-dark'>Details</a>
                    <a href='edit.php?x={$row["id"]}' class='btn btn-dark'>Edit</a>
                    <a href='delete.php?x={$row["id"]}' class='btn btn-dark'>Delete</a> 
                </div>
                </div>
                </div>
          </div>";
        }
    }else {
        $layout .= "No Results";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher</title>
    <link rel="Stylesheet" href="../css/publisher.css">
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
        <h1><?= $id ?></h1>
        <hr class="MLLine" style="width:10vw;">
    </div>

    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-1">
            <?= $layout ?>
        </div>
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

<?php
session_start();

if(!isset($_SESSION['login'])){
    echo"invalid access";
    die;

}
if($_SESSION['login']==false){
    echo"what are you doing beta";
    die;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <h1>you can click upload or drag and drop image</h1>
        <form action="upload.php" method="post"  enctype="multipart/form-data" class="bg-primary p-2">
            <input type="text" name="tags" placeholder="tags" class="form-control mt-2">
            <textarea name="desc" class="form-control mt-2" cols="30" rows="3" placeholder="decription"></textarea>
            <input type="file" name="image" class="form-control mt-2">
            <div class="text-center">
            <button class="btn btn-danger mt-2" >UPLOAD</button>
            </div>
        </form>
    </div>
    
</body>
</html>

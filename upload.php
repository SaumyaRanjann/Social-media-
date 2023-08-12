<?php
$tags=$_POST['tags'];
$desc=$_POST['desc'];


session_start();
$usname=$_SESSION['username'];
$prefix_path="../utility/images/";

$file_name=$prefix_path.date("d-m-Y-H-i-s").$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$file_name);

include '../utility/connect.php'; 

$data=mysqli_query($conn,"insert into galary(username,tags,discription,image) values ('$usname','$tags','$desc','$file_name')" );
if(!$data){
    echo "oops something went wrong";
    die;
}

header('location:profile.php');
?>
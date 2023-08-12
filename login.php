<?php
$name=$_POST['uname'];
$pass=$_POST['upass'];

session_start();
$_SESSION['login']=false;

$hash=md5($pass);
include '../utility/connect.php'; 


$cur=mysqli_query($conn,"select *from user where username='$name' and password='$hash'");
if(mysqli_num_rows($cur)==0){
    echo"invalid credintial";
}
else{
    $_SESSION['login']=true;
    $row=mysqli_fetch_assoc($cur);
    $_SESSION['userdata']=$row;
    $_SESSION['username']=$row['username'];
    header('location:profile.php');
}




?>
<?php

$uname=$_POST['uname'];
$uemail=$_POST['Email'];
$pass=$_POST['upass'];
$hash=md5($pass);
include '../utility/connect.php'; 

$mysql_cursor=mysqli_query($conn,"select *from user where username='$uname'");
$count=mysqli_num_rows($mysql_cursor);               
if($count>0){
    echo"user name already taken try another";                        
    die;
}
else{

    $status=mysqli_query($conn,"insert into user(username,password,email) values('$uname','$hash','$uemail')");
    
    if($status){
        echo "login success";
    }
    header('location:login.html');
}



?>
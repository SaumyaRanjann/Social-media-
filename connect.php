<?php
$conn=new mysqli("localhost","root","","social");
if($conn->connect_error){
    echo"something went wrong";
    die;

}
else{
    echo" ";
}
?>
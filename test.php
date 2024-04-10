<?php

$sever = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldata";

$con = mysqli_connect($sever , $username , $password , $dbname );

if(!$con)
{
    echo "not connect ";
}

$email = $_POST['email'];
$name = $_POST['Name'];
$password = $_POST['password'];
$cpass = $_POST['password'];

$sql =" INSERT INTO `test`(`email`, `name`, `password`, `confirm password`) VALUES ('$email','$name','$password','$cpass')";

$result = mysqli_query($con .$sql);

if($result)
{
    echo "submit";
}
else{
    echo "error";
}
?>
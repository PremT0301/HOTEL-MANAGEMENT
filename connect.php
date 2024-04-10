<?php
$sever = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hotaldata";

$con=mysqli_connect($sever , $username , $password , $dbname );

if(!$con){
    die("Connection Failed");
}
else{
    echo "Success";
}
?>
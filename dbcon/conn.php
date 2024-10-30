<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$db = "repo";

$con = mysqli_connect($localhost,$user,$pass,$db);
if(!$con){
    echo "Connection Error".mysqli_connect_error();
}


?>
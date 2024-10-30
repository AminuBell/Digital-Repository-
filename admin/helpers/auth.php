<?php
include("../../dbcon/conn.php");
session_start();

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM `admin_tbl` WHERE email = '$email' AND password = '$pass'";
    $res = mysqli_query($con,$sql);
    $num = mysqli_num_rows($res);
    if($num > 0){
        // location
        $data = mysqli_fetch_assoc($res);
        $_SESSION["admin"] = $data["id"];
        header("location: ../index.php ");
    }else{
        // location
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Invalid email or password...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../login.php ");
        

    }
}

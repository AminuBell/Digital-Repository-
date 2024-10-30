<?php
include("../dbcon/conn.php");
session_start();

// register 
if (isset($_POST["register"])) {
    $staff_id = $_POST["staff_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "INSERT INTO `supervisor_tbl`(`staff_id`, `name`, `email`, `password`) VALUES ('$staff_id','$name','$email','$password')";
    $res = mysqli_query($con, $sql);
    if ($res) {
       
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Resgister successful
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        header("Location: ../login.php");
    } else {
        
        $_SESSION["msg"] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Ooops something went wrong..
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header("Location: ../register.php");
    }
}

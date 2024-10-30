<?php
error_reporting(0);
include("../../dbcon/conn.php");
session_start();

if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $staff_id = $_POST["staff_id"];

    $sql = "UPDATE `supervisor_tbl` SET `staff_id`='$staff_id',`name`='$name',`email`='$email' WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Supervisor Updated Successful....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../supervisors.php");
        # code...
    } else {
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Oooops, sonmething went wrong
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../supervisors.php");
    }
}
if (isset($_GET["del"])) {
    $id = $_GET["del"];
    $sql = "DELETE FROM `supervisor_tbl` WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        $_SESSION["msg"] = '<div class="alert alert-info alert-dismissible fade show" role="alert">
        Supervisor Deleted Successful....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../supervisors.php");
        # code...
    } else {
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Oooops, sonmething went wrong
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../supervisors.php");
    }
}

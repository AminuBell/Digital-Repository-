<?php
error_reporting(0);
include("../../dbcon/conn.php");
session_start();

$dir = "../../uploads";

if (isset($_POST["upload"])) {
    $title = $_POST["title"];
    $student_name = $_POST["student_name"];
    $supervisor_name = $_POST["supervisor_name"];
    $project_year = $_POST["project_year"];

    $filename = rand(100, 10000) . "-" . $_FILES["file"]["name"];
    $location = $_FILES["file"]["tmp_name"];
    move_uploaded_file($location, $dir . '/' . $filename);

    $sql = "INSERT INTO `project_tbl`(`title`, `student_name`, `supervisor_name`, `project_year`, `file`) VALUES ('$title','$student_name','$supervisor_name','$project_year','$filename')";
    $res = mysqli_query($con, $sql);
    if ($res) {
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Project Uploaded Successful....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../upload.php");
        # code...
    } else {
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Oooops, sonmething went wrong
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../upload.php");
    }
}
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $student_name = $_POST["student_name"];
    $supervisor_name = $_POST["supervisor_name"];
    $project_year = $_POST["project_year"];

    $filename = rand(100, 10000) . "-" . $_FILES["file"]["name"];
    $location = $_FILES["file"]["tmp_name"];
    move_uploaded_file($location, $dir . '/' . $filename);

    $sql = "UPDATE `project_tbl` SET `title`='$title',`student_name`='$student_name',`supervisor_name`='$supervisor_name',`project_year`='$project_year',`file`='$filename'  WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Project Updated Successful....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../project.php");
        # code...
    } else {
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Oooops, sonmething went wrong
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../project.php");
    }
}

if (isset($_GET["del"])) {
    $id = $_GET["del"];
    $sql = "DELETE FROM `project_tbl` WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        $_SESSION["msg"] = '<div class="alert alert-info alert-dismissible fade show" role="alert">
        Project Deleted Successful....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../project.php");
        # code...
    } else {
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Oooops, sonmething went wrong
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: ../project.php");
    }
}

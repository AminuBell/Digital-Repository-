<?php
session_start();
function checklogin(){
    if($_SESSION["admin"] == ""){
        $_SESSION["msg"] = '<div class="alert alert-danger alert-dismissible">
        Please Login.
      </div>';
      header("location: ./login.php");

    }
}


?>
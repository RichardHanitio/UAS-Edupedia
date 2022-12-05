<?php 
    require_once "../db.php";
    require_once "../lib.php";

    $_SESSION['isAdmin'] = false;
    $_SESSION['email'] = "";
    header("location: loginAdmin.php");
?>
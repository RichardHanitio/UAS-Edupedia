<?php 
    session_start();
    
    $host = "localhost:3308";
    $username = "root";
    $password = "";
    $db = "edupedia";

    $conn = mysqli_connect($host, $username, $password);

    if($conn) {
        echo "<script>console.log('Connected to database')</script>";
    } else {
        echo "<script>console.log('Connection to database failed')</script>";
    }

    $conn->select_db($db);
?>
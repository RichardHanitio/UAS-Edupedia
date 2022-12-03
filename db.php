<?php
  session_start();

  $host = "localhost:3308";
  $username = "root";
  $password = "";
  $db = "edupedia";

  $conn = mysqli_connect($host, $username, $password, $db);

  if(mysqli_connect_errno()) {
    echo "<script>console.log('Connection to database failed : ".mysqli_connect_error()."')</script>";
  } else {
    echo "<script>console.log('Connected to database')</script>";
  }
?>
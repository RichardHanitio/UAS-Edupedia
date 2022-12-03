<?php
  require "../db.php";
  $query = "SELECT * FROM user WHERE username=? AND password=?";

  if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $res = $stmt->get_result()->fetch_assoc();
    
    if(!empty($res)) {
      $_SESSION["email"] = $res["email"];
      header("Location: ./Login.php");
    } else {
      header("Location: ./Login.php?err=Wrong email or password");
    }
  }
?>
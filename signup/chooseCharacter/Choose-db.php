<?php
require "../../db.php";
$user = $_SESSION["user"];
$avatar = $_POST["avatar"];
$query = "UPDATE user SET id_avatar = '$avatar' WHERE email='$user'";

if(isset($_POST["submit"])) {
  $qry = mysqli_query($conn, $query);

  if($qry) {
    header("Location: ../../home/home.php");
  }
}

?>
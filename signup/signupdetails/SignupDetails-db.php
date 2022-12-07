<?php
require "../../db.php";
$query = "INSERT INTO user (email, name, username, password, gender, school, location, birthday, avatar, profile, background, role) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

if(isset($_POST["signup"])) {
  $name = $_POST["fullname"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $gender = "male";
  $school = $_POST["schoolname"];
  $location = "indonesia";
  $birthday = date_format(date_create($_POST["birthday"]), "Y-m-d");
  $avatar = "not-selected";
  $profile = "default-photo.png";
  $background = "default-background.png";
  $role = $_POST["role"];


  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssssssssssss", $email, $name, $username, $password, $gender, $school, $location, $birthday, $avatar, $profile, $background, $role);
  $stmt->execute();
}
?>
<?php
    require_once "../../lib.php";
    require_once "../../db.php";

    if(isset($_POST['insertUser'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $school = $_POST['school'];
        $location = $_POST['location'];
        $birthday = $_POST['birthday'];
        $avatar = $_POST['avatar'];
        $profile = $_POST['profile'];
        $background = $_POST['background'];
        $role = $_POST['role'];
        
        $qry = mysqli_query($conn,"INSERT INTO user VALUES ('$name','$username','$email','$password','$gender','$school','$location','$birthday','$avatar','$profile','$background','$role')" );
        if($qry){
            header("location: ../admin.php?page=1");
            
        }
        else{
            echo "ERROR";
        }
    }
    else if(isset($_POST['changeUser'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $school = $_POST['school'];
        $location = $_POST['location'];
        $birthday = $_POST['birthday'];
        $avatar = $_POST['avatar'];
        $role = $_POST['role'];

        $qry = mysqli_query($conn,"UPDATE user SET name='$name',username='$username', password='$password', gender='$gender', school='$school', id_location='$location', birthday='$birthday', id_avatar='$avatar', role='$role' WHERE email='$email'" );
        if($qry){
            header("location: ../admin.php?page=1");
            
        }
        else{
            echo "ERROR";
        }
    }
    else if(isset($_GET['email'])){
        $email = $_GET['email'];
        $qry = mysqli_query($conn, "DELETE FROM user WHERE email='$email'");

        if($qry){
            header("location: ../admin.php?page=1");
            
        }
        else{
            echo "ERROR";
        }
    }
?>
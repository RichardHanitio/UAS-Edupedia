<?php
    require_once "../lib.php";
    require_once "../db.php";
    
    if(isset($_POST['photoSub'])){
        global $conn;

        $imageFile = $_FILES['photo'];
        $directoryTujuan = "../Photo/".$imageFile['name'];
        move_uploaded_file($imageFile['tmp_name'], $directoryTujuan);

        $email = trim($_POST['email']);
        $image = trim($imageFile['name']); 
        $qry = mysqli_query($conn, "UPDATE user SET profile='$image' WHERE email =$email");
        if($qry){
            header("location: profile.php");
            echo"SUCCESS";
        }
        else{
            echo "ERORR";
        }
    }

    else if(isset($_POST['backgroundSub'])){
        global $conn;

        $imageFile = $_FILES['background'];
        $directoryTujuan = "../Background/".$imageFile['name'];
        move_uploaded_file($imageFile['tmp_name'], $directoryTujuan);

        $email = $_POST['email'];
        $image = $imageFile['name'];
        $qry = mysqli_query($conn, "UPDATE user SET background='$image' WHERE email=$email");

        if($qry){
            header("location: profile.php");
        }
        else{
            echo "ERORR";
        }
    }
    else if(isset($_POST['changeGeneral'])){
        global $conn;

        $email = $_POST['email'];
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $location = $_POST['location'];
        $avatar = $_POST['avatar'];
        
        
        $qry = mysqli_query($conn, "UPDATE user SET name='$name', birthday='$birthday', id_gender='$gender', id_location='$location', id_avatar='$avatar' WHERE email='$email'");

        if($qry){
           header("location: profile.php");
        }
        else{
            echo "ERORR";
        }
    }
?>
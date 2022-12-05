<?php
    require_once "../../lib.php";
    require_once "../../db.php";
    
     if(isset($_POST['changeContent'])){
        global $conn;
        $id_content =  $_POST['id_content'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $upload_date = $_POST['upload_date'];
        $description = $_POST['description'];
        $qry = mysqli_query($conn, "UPDATE content SET type='$type',name='$name',email='$email',upload_date='$upload_date',description='$description' WHERE id_content='$id_content'");

        if($qry){
            header("location: ../admin.php?page=2");
        }
        else{
            echo "ERORR";
        }
    }
?>
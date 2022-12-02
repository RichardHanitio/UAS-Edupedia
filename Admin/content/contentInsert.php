<?php
    require_once "../../lib.php";
    require_once "../../db.php";
    if(isset($_POST['insertContent'])){
        global $conn;
        $imageFile = $_FILES['thumpnail'];
        $tipeFile = $imageFile['type'];
        if($_POST["type"] == "video"){
            $directoryTujuan = "../../Videos/".$imageFile['name'];
        }
        else{
            $directoryTujuan = "../../Papers/".$imageFile['name'];
        }
        move_uploaded_file($imageFile['tmp_name'], $directoryTujuan);


        $id_content =  uniqid();
        $type = $_POST['type'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];

        $tanggal = new date();
        $parts = explode('/', $tanggal);
        $tanggal_upload  = "$parts[2]-$parts[0]-$parts[1]";   
       
        $image = $imageFile['name'];
        $discount = $_POST['discount'];

        $stmt = $conn->prepare("INSERT INTO menu VALUES ('?','?','?','?','?','?','?')");
        $stmt->bind_param("sssssss",$id_content,$type,$image,$nama,$tanggal_upload,$deskripsi);
        $stmt->execute();
        header("location: ../admin.php?page=2");
    }
    else if(isset($_GET['id_content'])){
        global $conn;
        $id_content = $_GET['id_content'];
        $qry = mysqli_query($conn, "DELETE FROM content WHERE id_content='$id_content'");
        if($qry){
            header("location: ../adminPanel.php?page=2");
        }
        else{
            echo "FAILED";
        }
    }
    else if(isset($_POST['changeContent'])){
        global $conn;
        $id_content =  $_POST['id_content'];
        $type = $_POST['type'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];

        $price = (int)$_POST['price'];
        $image = $_POST['image'];
        $discount = $_POST['discount'];
        $qry = mysqli_query($conn, "UPDATE menu SET category='$category',name='$name',description='$description',price='$price',image='$image',discount='$discount' WHERE id_menu='$id_menu'");

        if($qry){
            header("location: ../adminPanel.php?page=2");
        }
        else{
            echo "ERORR";
        }
    }
?>
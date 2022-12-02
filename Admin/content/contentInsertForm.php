<?php 
    require_once "../../db.php";

    $qryEmail = "SELECT email FROM user";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Insert Form</title>
    <link rel="stylesheet" href="../form.css">
</head>
<body>
    
    <form action="contentInsert.php" method="post" enctype="multipart/form-data">
        <a href="../insert.php" class="back"><img src="../../Image/Arrow.png" alt=""></a>
        <div class="form-format first">
            <div class="field-name">Type</div>
            <select name="type" id="" class="field list">
                <option value="video">Video</option>
                <option value="paper">Paper</option>
            </select>
        </div>
        
        <div class="form-format">
            <div class="field-name">Nama</div>
            <input type="text" class="field" name="nama">
        </div>

        <div class="form-format">
            <div class="field-name">Email</div>
            <select name="email" id="" class="field list">
                <?php while($row = mysqli_fetch_array($qryEmail)) {?>
                    <option value="<?= $row[0] ?>"> <?= $row[0] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-format">
            <div class="field-name" >Deskripsi</div>
            <textarea class="field" id="desk" name="type"></textarea>
        </div>

        <div class="form-format">
            <div class="field-name">Thumpnail</div>
            <input type="file" class="field" name="thumpnail">
        </div>

        <div class="form-format">
            <button type="submit" class="field" name="insertContent">Confirm</button>
        </div>
    </form>
</body>
</html>
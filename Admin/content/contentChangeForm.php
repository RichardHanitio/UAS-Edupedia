<?php 
    require_once "../../db.php";

    $qryEmail = mysqli_query($conn, "SELECT email FROM user" );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Change Form</title>
    <link rel="stylesheet" href="../form.css">
</head>
<body>
    
    <form action="content.php" method="post" enctype="multipart/form-data">
        <a href="../admin.php?page=2" class="back"><img src="../../Image/Arrow.png" alt=""></a>

        <input type="hidden" name="id_content" value="<?= $_GET['id_content'] ?>">

        <div class="form-format first">
            <div class="field-name">Type</div>
            <select name="type" id="" class="field list" value="<?= $_GET['type'] ?>">
                <option <?php if($_GET['type'] == "video") echo "selected='selected'" ?> value="video">Video</option>
                <option <?php if($_GET['type'] == "article") echo "selected='selected'" ?> value="article">Article</option>
            </select>
        </div>

        <div class="form-format">
            <div class="field-name">Name</div>
            <input type="text" class="field" name="name" value="<?= $_GET['name'] ?>">
        </div>

        <div class="form-format">
            <div class="field-name">Email</div>
            <select name="email" id="" class="field list" value="<?= $_GET['email'] ?>">
                <?php while($row = mysqli_fetch_array($qryEmail)) {?>
                    <option <?php if($_GET['email'] == $row[0]) echo "selected='selected'" ?> value="<?= $row[0] ?>"> <?= $row[0] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-format">
            <div class="field-name">Upload Date</div>
            <input type="date" class="field" name="upload_date" value="<?= $_GET['upload_date'] ?>">
        </div>

        <div class="form-format">
            <div class="field-name" >Description</div>
            <textarea class="field" id="desk" name="description" ><?= $_GET['description'] ?></textarea>
        </div>


        <div class="form-format">
            <button type="submit" class="field" name="changeContent">Confirm</button>
        </div>
    </form>
</body>
</html>
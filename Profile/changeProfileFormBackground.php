<?php 
    require_once "../db.php";

    $email = $_GET['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile | Background</title>
    <link rel="stylesheet" href="../Admin/form.css">
</head>
<body>
    
    <form action="changeProfile.php" method="post" enctype="multipart/form-data">

        <div class="form-format">
            <div class="field-name">Background</div>
            <input type="file" class="field" name="background">
        </div>
        
        <input type="hidden" name="email" value="<?= $email ?>">

        <div class="form-format">
            <button type="submit" class="field" name="backgroundSub">Confirm</button>
        </div>
    </form>
</body>
</html>
<?php 
    require_once "../../db.php";

    $qryEmail = "SELECT email FROM user";
    $qryLocation = mysqli_query($conn, "SELECT * from location");
    $qryAvatar = mysqli_query($conn, "SELECT * from avatar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Insert Form</title>
    <link rel="stylesheet" href="../form.css">
</head>
<body>
    <form action="user.php" method="post" enctype="multipart/form-data">
        <a href="../insert.php" class="back"><img src="../../Image/Arrow.png" alt=""></a>
        
        <div class="form-format first">
            <div class="field-name">Nama</div>
            <input type="text" class="field" name="name">
        </div>

        <div class="form-format">
            <div class="field-name">Username</div>
            <input type="text" class="field" name="username">
        </div>

        <div class="form-format">
            <div class="field-name">Email</div>
            <input type="text" class="field" name="email">
        </div>

        <div class="form-format">
            <div class="field-name" >Password</div>
            <input type="text" class="field" name="password">
        </div>

        <div class="form-format">
            <div class="field-name">Gender</div>
            <select name="gender" id="gender" class="field list">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="form-format">
            <div class="field-name" >School</div>
            <input type="text" class="field" name="school">
        </div>

        <div class="form-format">
            <div class="field-name">Location</div>
            <select name="location" id="location" class="field list" value="<?= $user['id_location'] ?>">
                <?php while($row = mysqli_fetch_assoc($qryLocation)) {?>
                    <option value="<?= $row['id_location'] ?>"><?= $row['name'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-format">
            <div class="field-name">Birthday</div>
            <input type="date" class="field" name="birthday">
        </div>

        <div class="form-format">
            <div class="field-name">Avatar</div>
            <select name="avatar" id="" class="field list" value=" <?= $user["id_avatar"] ?>">
                <?php while($row = mysqli_fetch_assoc($qryAvatar)) {?>
                    <option value="<?=$row['id_avatar'] ?>"><?=$row['id_avatar'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-format">
            <input type="hidden" class="field" name="profile" id="" value="default-photo.png">
        </div>
        
        <div class="form-format">
            <input type="hidden" class="field" name="background" id="" value = "default-background.png">
        </div>  

        <div class="form-format">
            <div class="field-name">Role</div>
            <select name="role" id="role" class="field list">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <div class="form-format">
            <button type="submit" class="field" name="insertUser">Confirm</button>
        </div>
    </form>
</body>
</html>
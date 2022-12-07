<?php 
    require_once "../../db.php";

    $qryEmail = "SELECT email FROM user";
    $qryLocation = mysqli_query($conn, "SELECT * from location");
    $qryAvatar = mysqli_query($conn, "SELECT * from avatar");
    var_dump($_GET);
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
            <input type="text" class="field" name="name" value="<?= $_GET['name'] ?>">
        </div>

        <div class="form-format">
            <div class="field-name">Username</div>
            <input type="text" class="field" name="username" value="<?= $_GET['username'] ?>">
        </div>


        <input type="hidden" class="field" name="email" value="<?= $_GET['email'] ?>">
        

        <div class="form-format">
            <div class="field-name" >Password</div>
            <input type="text" class="field" name="password" value="<?= $_GET['password'] ?>">
        </div>

        <div class="form-format">
            <div class="field-name">Gender</div>
            <select name="gender" id="gender" class="field list" value="<?= $_GET["gender"] ?>">
                <option <?php if($_GET['gender'] == "Male") echo "selected='selected'" ?> value="Male">Male</option>
                <option <?php if($_GET['gender'] == "Female") echo "selected='selected'" ?> value="Female">Female</option>
            </select>
        </div>

        <div class="form-format">
            <div class="field-name" >School</div>
            <input type="text" class="field" name="school" value="<?= $_GET['school'] ?>">
        </div>

        <div class="form-format">
            <div class="field-name">Location</div>
            <select name="location" id="location" class="field list" value="<?= $_GET['id_location'] ?>">
                <?php while($row = mysqli_fetch_assoc($qryLocation)) {?>
                    <option <?php if($_GET['location'] == $row['id_location']) echo "selected='selected'" ?> value="<?= $row['id_location'] ?>"><?= $row['name'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-format">
            <div class="field-name">Birthday</div>
            <input type="date" class="field" name="birthday" value="<?= $_GET['birthday'] ?>">
        </div>

        <div class="form-format">
            <div class="field-name">Avatar</div>
            <select name="avatar" id="" class="field list" value=" <?= $_GET["id_avatar"] ?>">
                <?php while($row = mysqli_fetch_assoc($qryAvatar)) {?>
                    <option <?php if($_GET['avatar'] == $row['id_avatar']) echo "selected='selected'" ?> value="<?=$row['id_avatar'] ?>"><?=$row['id_avatar'] ?></option>
                <?php } ?>
            </select>
        </div>


        <div class="form-format">
            <div class="field-name">Role</div>
            <select name="role" id="role" class="field list">
                <option <?php if($_GET['role'] == "Student") echo "selected='selected'" ?> value="student">Student</option>
                <option <?php if($_GET['role'] == "Teacher") echo "selected='selected'" ?> value="teacher">Teacher</option>
                <option <?php if($_GET['role'] == "Admin") echo "selected='selected'" ?> value="admin">Admin</option>
            </select>
        </div>

        <div class="form-format">
            <button type="submit" class="field" name="changeUser">Confirm</button>
        </div>
    </form>
</body>
</html>
<?php 
    require_once "../db.php";

    $userEmail = $_SESSION["user"];
    $profileQuery = mysqli_query($conn, "SELECT * from user WHERE email='$userEmail'");
    $user = mysqli_fetch_assoc($profileQuery);
    $ulo = $user['id_location'];
    $qryLocation = mysqli_query($conn, "SELECT * from location");
    $qryLocationU = mysqli_query($conn, "SELECT * from location WHERE id_location='$ulo'");
    $qryAvatar = mysqli_query($conn, "SELECT * from avatar");

    $userLocation = mysqli_fetch_array($qryLocationU);
    $userLocationName = $userLocation[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,700;1,400&family=Inria+Serif:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="profile.js"> </script>
    <script src="../global.js"></script>
</head>
<body>
    <?php include '../topbar.php' ?>

    <!-- PROFILE BACKGROUND AND PICTURE -->
    <div class="profile-container" >
        <img src="../Background/<?= $user['background'] ?>" alt="" id="background">
        <div class="profile-container-2">
            <div class="profile-picture"><img src="../Photo/<?= $user['profile'] ?>" alt=""></div>
            <div class="profile-name"><?= $user["name"] ?></div>
            <div class="profile-clan">
                <img src="./Image/ClanLogo.png" alt="" class="profile-clan-logo">
                <div class="profile-clan-name">Kuhaku</div>
            </div>
        </div>
</div>

    <!-- PROFILE INFORMATION -->
    <div class="profile-information">
        <div class="info-container description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo beatae perspiciatis, natus deserunt nisi recusandae. Ad quasi corporis eius, est consequuntur ratione dolores perspiciatis excepturi, cum a minima mollitia.</div>
        <div class="info-container general">
            <h3>General Infomation</h3>
            <div class="general-container">
                <div class="info">
                    <div class="title">Name</div>
                    <div class="value" id="name"><?= $user["name"] ?></div>
                </div>

                <div class="info">
                    <div class="title">Birthday</div>
                    <div class="value" id="birthday"><?= $user["birthday"] ?></div>
                </div>

                <div class="info">
                    <div class="title">Avatar</div>
                    <div class="value" id="avatar">
                        <img src="../Images/<?= $user['id_avatar'].".png"?>" alt="">
                    </div>
                </div>

                <div class="info">
                    <div class="title">Gender</div>
                    <div class="value" id="gender"><?= $user["gender"] ?></div>
                </div>

                <div class="info">
                    <div class="title">Location</div>
                    <div class="value" id="location"><?= $userLocationName ?></div>
                </div>

                <div class="info">
                    <div class="title">Level</div>
                    <div class="value" id="level">12</div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM BAR -->
    <div class="bottom-bar">
        <div></div>
        <div class="edit-right">
            <img class="edit" src="./Image/check_circle_outline.png" alt="">
            <button class="edit" onclick="open_form()">Edit Profile</button>
        </div>
    </div>

    <!-- EDIT FORM -->
    <div class="edit-form-container">
        <form action="changeProfile.php" class="edit-form" method="POST">
            <button class="close" onclick="fnAction()">X</button>

            <div class="edit-title">Edit Profile</div>
            <input type="hidden" name="email" value="<?= $userEmail ?>">
            <div class="edit-format-container">
                <div class="form-format">
                    <div class="field-name">Name</div>
                    <input type="text" class="field" name="name" value="<?= $user["name"] ?>">
                </div>
    
                <div class="form-format">
                    <div class="field-name">Birthday</div>
                    <input type="date" class="field" name="birthday" value="<?= $user["birthday"] ?>">
                </div>
    
                <div class="form-format">
                    <div class="field-name">Gender</div>
                    <select name="gender" id="gender" class="field list" value="<?= $user["gender"] ?>">
                        <option <?php if($user['gender'] == "Male") echo "selected='selected'" ?> value="Male">Male</option>
                        <option <?php if($user['gender'] == "Female") echo "selected='selected'" ?> value="Female">Female</option>
                    </select>
                </div>
                
                <div class="form-format">
                    <div class="field-name">Location</div>
                    <select name="location" id="location" class="field list" value="<?= $user['id_location'] ?>">
                        <?php while($row = mysqli_fetch_assoc($qryLocation)) {?>
                            <option <?php if($user['id_location'] == $row['id_location']) echo "selected='selected'" ?> value="<?= $row['id_location'] ?>"><?= $row['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-format">
                    <div class="field-name">Avatar</div>
                    <select name="avatar" id="" class="field list" value=" <?= $user["id_avatar"] ?>">
                        <?php while($row = mysqli_fetch_assoc($qryAvatar)) {?>
                            <option <?php if($user['id_avatar'] == $row['id_avatar']) echo "selected='selected'" ?> value="<?=$row['id_avatar'] ?>"><?=$row['id_avatar'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-format">
                    <div class="field-name">Change Photo or Background</div>
                    <div class="edit-bgphoto">
                        <label for="photo" class="change"><a href="changeProfileFormPhoto.php?email='<?= $user['email']?>'">Photo</a></label>
                        <label for="background" class="change"><a href="changeProfileFormBackground.php?email='<?= $user['email']?>'">Background</a></label>
                    </div>
                </div>
                
                
                <div class="form-format">
                    <button type="submit" class="field" name="changeGeneral">Confirm</button>
                </div>
            </div>
            
        </form>
    </div>
    <?php include '../nav.php'?>
</body>
</html>
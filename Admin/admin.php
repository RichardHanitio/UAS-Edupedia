<?php 
    require_once "../db.php";
    require_once "../lib.php";

    if(isset($_POST['loginAdmin'])){
        $email = $_POST['username'];
        $password = $_POST['password'];
        $username = $_POST['username'];

        $qryAdmin = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' OR username='$username'");
        if(mysqli_num_rows($qryAdmin) > 0){
            $row = mysqli_fetch_assoc($qryAdmin);
            if($row['username'] == $username && $row['password'] == $password && $row['role'] == "admin" || $row['email'] == $email && $row['password'] == $password && $row['role'] == "admin"){
                $_SESSION['isAdmin'] = true;
                $_SESSION['email'] = $email;
            }   
        }
        else{
            header("location: loginAdmin.php");
        }
    }
    
    
    if(!isset($_GET['keyword'])) $_GET['keyword'] = null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edupedia Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<?php if($_SESSION['isAdmin'] == true) {?>
    <body>
        <div class="top">
            <a href="logout.php" id="logout">Logout</a>
            <a href="insert.php">Insert</a>
        </div>
        <div class="admin-top">
            
            
            <div class="admin-nav">
                <a href="admin.php?page=1" class="nav-admin">User</a>
                <a href="admin.php?page=2" class="nav-admin">Content</a>

            </div>
        </div>
        

        <div class="admin-bottom">
            <!-- Pelajar -->
            <?php if(!isset($_GET['page']) || $_GET['page'] == 1) {?>
                <form action="admin.php" class="find" method="GET">
                    <input type="text" class="field" placeholder="Search . . ." name='keyword'>
                    <button type="submit">Search</button>
                    <input type="hidden" name="page" value="1">
                </form>
                <div class="table">
                    <table>
                        <tr id="header">
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>School</th>
                            <th>Location</th>
                            <th>Birthday</th>
                            <th>Avatar</th>
                            <th>Profile</th>
                            <th>Background</th>
                            <th>Role</th>
                            <th>Option</th>
                        </tr>

                        <?php $table = selectTableUser("user", $_GET['keyword']); while($row = mysqli_fetch_array($table)) {?>
                            <tr>
                                <td><?= $row[0] ?></td>
                                <td><?= $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[3] ?></td>
                                <td><?= $row[4] ?></td>
                                <td><?= $row[5] ?></td>
                                <td><?= $row[6] ?></td>
                                <td><?= $row[7] ?></td>
                                <td><?= $row[8] ?></td>
                                <td><?= $row[9] ?></td>
                                <td><?= $row[10] ?></td>
                                <td><?= $row[11] ?></td>
                                <td>
                                    <a href="user/user.php?email=<?= $row[2] ?>">Delete | </a> 
                                    <a href="user/userChangeForm.php?email=<?= $row[2] ?> &name=<?= $row[0] ?> &username=<?= $row[1] ?> &email=<?= $row[2] ?> &password=<?= $row[3] ?> &gender=<?= $row[4] ?> &school=<?= $row[5] ?> &location=<?= $row[6] ?>&birthday=<?= $row[7] ?>&avatar=<?= $row[8] ?>&role=<?= $row[11] ?>">Change</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            
            <?php } else if ($_GET['page'] == 2) { ?>
                <form action="admin.php" class="find" method="GET">
                    <input type="text" class="field" placeholder="Search . . ." name='keyword'>
                    <button type="submit">Search</button>
                    <input type="hidden" name="page" value="2">
                </form>
                <div class="table">
                    <table>
                        <tr id="header">
                            <th>Id_content</th>
                            <th>Type</th>
                            <th>Thumpnail</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Upload_Date</th>
                            <th>Description</th>
                            <th>Option</th>
                        </tr>

                        <?php $table = selectTableContent("content", $_GET['keyword']); while($row = mysqli_fetch_array($table)) {?>
                            <tr>
                                <td><?= $row[0] ?></td>
                                <td><?= $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[3] ?></td>
                                <td><?= $row[4] ?></td>
                                <td><?= $row[5] ?></td>
                                <td><?= $row[6] ?></td>
                                <td>
                                    <a href="content/content.php?id_content=<?= $row[0] ?>">delete | </a> 
                                    <a href="content/contentChangeForm.php?id_content=<?= $row[0] ?> &type=<?= $row[1] ?> &thumpnail_name=<?= $row[2] ?> &name=<?= $row[3] ?> &email=<?= $row[4] ?>&upload_date=<?= $row[5] ?>&description=<?= $row[6] ?>">change</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            <?php } ?>
        </div>
    </body>
<?php } ?>
</html>
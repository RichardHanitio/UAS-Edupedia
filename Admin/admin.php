<?php 
    require_once "../db.php";
    $_SESSION['isAdmin'] = true;
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
<body>
    <div class="top">
        <a href="adminLogout.php" id="logout">Logout</a>
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
                    </tr>

                    <?php $table = selectTableUser("user", $_GET['keyword']); while($row = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td>Nama</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Gender</td>
                            <td>School</td>
                            <td>Location</td>
                            <td>Birtdday</td>
                            <td>Avatar</td>
                            <td>Profile</td>
                            <td>Background</td>
                            <td>Role</td>
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal_upload</th>
                        <th>Deskripsi</th>
                    </tr>

                    <?php $table = selectTableContent("content", $_GET['keyword']); while($row = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td>Id_content</td>
                            <td>Type</td>
                            <td>Thumpnail_name</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Tanggal_upload</td>
                            <td>Deskripsi</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        <?php } ?>
        
        
        
        
        
        
        
            
            
            
        
    </div>
</body>
</html>
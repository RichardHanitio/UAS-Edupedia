<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="admin.php" method="post" enctype="multipart/form-data" class="formAdmin">
        <div class="form-format first">
            <div class="field-name">Username or Email</div>
            <input type="text" class="field" name="username">
        </div>
        <div class="form-format">
            <div class="field-name">Password</div>
            <input type="password" class="field" name="password">
        </div>

        <div class="form-format">
            <button type="submit" class="field" name="loginAdmin">Login</button>
        </div>
</body>
</body>
</html>
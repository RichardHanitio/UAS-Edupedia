<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="SignupDetails.css">
  <title>Signup Details</title>
  <script src="./SignupDetails.js" defer></script>
</head>
<body>
  <div class="container">
    <div class="inner-container">
      <div class="logo">
        <img src="../../images/logo.png" alt="">
      </div>
      <form action="SignupDetails-db.php" method="POST" class="username-pass-container"> 
        <h1 class="signup">Signup</h1>
         <!-- fullname -->
        <div class="field">
          <input type="text" name="fullname" id="fullname" placeholder=" ">
          <label for="fullname">Full Name</label>
        </div>
         <!-- username -->
        <div class="field">
          <input type="text" name="username" id="username" placeholder=" ">
          <label for="username">User Name</label>
        </div>
        
        <!-- role -->
        <input type="hidden" name="role" id="role" placeholder=" " value="<?php echo $_GET['role']?>" >
        
         <!-- email -->
        <div class="field">
          <input type="email" name="email" id="email" placeholder=" ">
          <label for="email">Email</label>
        </div>
         <!-- College/School name -->
        <div class="field">
          <input type="text" name="schoolname" id="schoolname" placeholder=" ">
          <label for="schoolname">College/School Name</label>
        </div>
         <!-- Birth day -->
        <div class="field">
          <input type="date" name="birthday" id="birthday" placeholder=" ">
          <label for="schoolname">Birth Day</label>
        </div>
        <!-- password -->
        <div class="field">
          <input type="password" name="password" id="password" placeholder=" ">
          <label for="password">Password</label>
        </div>

        <!-- show password -->
        <div class="show-pass">
          <input type="checkbox" id="show-password" />
          <label for="show-password">Show Password</label>
        </div>

        <!-- submit btn -->
        <button class="btn btn-signup" name="signup">
          Signup
        </button>
      </form>
    </div>
  </div>
</body>
</html>
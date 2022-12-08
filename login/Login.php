<?php
  require_once("../db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <script src="./Login.js" defer></script>
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="inner-container">
      <div class="logo">
        <img src="../images/logo.png" alt="">
      </div>
      <form action="Login-db.php" method="POST" class="username-pass-container"> 
        <h1 class="login">Login</h1>
        <?php if(isset($_GET["err"])) echo "<div class='error'>".$_GET["err"]."</div>"?>
        <!-- username -->
        <div class="field">
          <input type="text" name="username" id="username" placeholder=" ">
          <label for="username">Username</label>
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
        <button class="btn btn-login" name="login">
          Login
        </button>
      </form>
      <div class="or">
        <div></div><span>OR</span><div></div>
      </div>
      <div class="facebook-google-container">
        <button class="btn btn-facebook">
          <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="25px" height="30px">    
            <path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"/>
          </svg>
          <span>Facebook</span>
        </button>
        <button class="btn btn-google">
          <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="25px" height="30px">    
            <path d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"/>
          </svg>
          <span>Google</span>
        </button>
      </div>
      <div class="sign-up">
        Don't have an account? &nbsp;<a href="../signup/Signup.php">Sign up</a>
      </div>
    </div>
  </div>
</body>
</html>
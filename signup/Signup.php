<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Signup.css">
  <title>Sign up</title>
</head>
<body>
  <div class="container">
    <div class="inner-container">
      <div class="img-container">
        <img src="../images/edupedia-welcome.png" alt="">
      </div>
      <div class="title">
        <h1 class="main">Welcome to Edupedia</h1>
        <div class="subtitle">Tired of online classes? Edupedia makes learning fun!</div>
      </div>
      
      <div class="choose-role">
        <div class="question">Who are you?</div>
        <div class="answer">
          <div class="teacher choose-item" onclick="location.href='./signupTeacher/SignupTeacher.html'">
            <img src="../images/teacher.png" alt="teacher">
            <div>I am a Teacher</div>
          </div>
          <div class="student choose-item" onclick="location.href='./signupStudent/SignupStudent.html'">
            <img src="../images/student.png" alt="teacher">
            <div>I am a Student</div>
          </div>
        </div>
      </div>

      <div class="sign-in">
        Already have an account? Click here to &nbsp;<a href="../login/Login.html">log in.</a>
      </div>
    </div>
  </div>
</body>
</html>
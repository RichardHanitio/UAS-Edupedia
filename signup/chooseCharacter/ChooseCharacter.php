<?php
  require_once("../../db.php");
  if(isset($_POST["finish"])) echo $_POST["submit"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./ChooseCharacter.css">
  <title>Choose Character</title>
</head>
<body>
  <div class="container">
    <div class="inner-container">
      <div class="title">Select Your Avatar</div>
      <div class="selections">
        <div class="avatar albedo" name="albedo">
          <img src="../../images/albedo.png" alt="">
        </div>
        <div class="avatar tartaglia" name="tartaglia">
          <img src="../../images/tartaglia.png" alt="">
        </div>
        <div class="avatar hutao" name="hutao">
          <img src="../../images/hutao.png" alt="" >
        </div>
        <div class="avatar venti" name="venti">
          <img src="../../images/venti.png" alt="">
        </div>
        <div class="avatar keqing" name="keqing">
          <img src="../../images/keqing.png" alt="">
        </div>
        <div class="avatar ayaka">
          <img src="../../images/ayaka.png" alt="" name="ayaka">
        </div>
        <div class="avatar nahida">
          <img src="../../images/nahida.png" alt="" name="nahida">
        </div>
      </div>
      <form class="confirm" action="./Choose-db.php" method="POST">
        <input type="hidden" name="avatar" value="" class="confirm-avatar"/>
        <button type="submit" class="btn btn-confirm" type="submit" name="submit">
          Confirm
        </button>
      </form>
    </div>
  </div>
</body>
<script src="./ChooseCharacter.js"></script>
</html>
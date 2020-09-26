<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
  <link rel="stylesheet" href="http://localhost/php-mvc-1/mvc/views/assets/css/register.css">
  <title>Document</title>
</head>

<body>
  <form class="login-form" action="./check" method="POST" autocomplete="off">
    <span id="mess_email" class="span"></span>
    <?php 
      if(isset($_SESSION["checkemail"])){
        echo "<span class='span'>Email not exist</span>";
      }
    ?>
    <input id="email" type="email" name="email" placeholder="Email" value="<?php 
    if(isset($_SESSION["emaillogin"])){
      echo $_SESSION["emaillogin"] ;
    }
    ?>" />
    <div class="input-icon">
      <span id="mess_pass" class="span"></span>
      <?php 
      if(isset($_SESSION["checkpassword"])){
        echo "<span class='span'>Password wrong</span>";
      }
    ?>
      <input id="password" type="password" name="password" placeholder="Password" value="<?php 
    if(isset($_SESSION["passwordlogin"])){
      echo $_SESSION["passwordlogin"] ;
    }
    ?>" />
      <i id="show" class="fa fa-eye show-password"></i>
    </div>
    <a href="#" class="forgot">Forgot password?</a>
    <button name="login">Sign In</button>
  </form>
</body>
<script src="http://localhost/php-mvc-1/mvc/views/assets/js/login.js"></script>

</html>
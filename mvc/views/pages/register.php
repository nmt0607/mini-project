<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
    <link rel="stylesheet" href="http://localhost/php-mvc-1/mvc/views/assets/css/register.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="login-form" action="./check" method="POST" autocomplete="off">
        <span id="mess_name" class="span"></span>
        <input id="name" type="text" name="name" placeholder="Name" value="<?php if (isset($_SESSION["name"])) {
                                                                                echo $_SESSION["name"];
                                                                            } ?>" />
        <?php if (isset($_SESSION["email"])) {
            echo "<span class='span'>This mail exist</span>";
        } ?>
        <input id="email" type="email" name="email" placeholder="Email" value="<?php if (isset($_SESSION["email"])) {
                                                                                    echo $_SESSION["email"];
                                                                                } ?>" />
        <span id="mess_pass" class="span"></span>
        <input id="password" type="text" name="password" placeholder="Password" value="<?php if (isset($_SESSION["password"])) {
                                                                                            echo $_SESSION["password"];
                                                                                        } ?>" />
        <span id="confirm_password" class="span"></span>
        <input id="re_password" type="text" name="re_password" placeholder="Retype Password" value="<?php if (isset($_SESSION["password"])) {
                                                                                                        echo $_SESSION["password"];
                                                                                                    } ?>" />
        <input id="age" type="number" name="age" placeholder="Age" value="<?php if (isset($_SESSION["age"])) {
                                                                                echo $_SESSION["age"];
                                                                            } ?>" />
        <button name="signup">Sign up</button>
    </form>
</body>
<script src="http://localhost/php-mvc-1/mvc/views/assets/js/register.js"></script>

</html>
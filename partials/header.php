<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/auth.css">
        <title></title>
    </head>
    <body>
        <div class="header__bar">
            <?php
            if (isset($_SESSION['user_username'])) {
                $login = '<a href="login.php?logout" class="login">Log Out</a>';
            } else {
                $login = '<a href="login.php" class="login">Log In</a>';
            }

            echo $login;
            
            ?>
        </div>

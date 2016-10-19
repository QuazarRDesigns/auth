<?php
session_start();
require_once 'database/initdbandquery.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['inputUsername']) && isset($_POST['inputPassword'])) {
        $username = $_POST['inputUsername'];
        $password = $_POST['inputPassword'];
        $user = getUserDetails($username, $password);
        $role = $user['role'];

        if ($username === $user['username'] && $password === $user['password']) {
            if (isset($_POST['remember_me'])) {
                setcookie('remember_me', $username, time() + 60, '/auth/login.php');
            }
            $_SESSION['user_username'] = $username;
            $_SESSION['user_password'] = $password;
            $_SESSION['user_role'] = $role;
            header('Location: index.php');
        } else {
            $error = 'These credentials are invalid';
        }
    }
}

if (isset($_COOKIE['remember_me'])) {
    $_SESSION['user_username'] = $_COOKIE['remember_me'];
    header('Location: index.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/auth.css">
        <title></title>
    </head>
    <body>

        <div class="container">

            <form class="form-signin" method="POST" action="login.php">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" id="inputUsername" class="form-control" name="inputUsername" placeholder="Username" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" name='inputPassword' placeholder="Password" required="">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember_me"> Remember me
                    </label>
                </div>
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
            </form>
            <a href="index.php">Go Back</a>
        </div> <!-- /container -->

    </body>
</html>

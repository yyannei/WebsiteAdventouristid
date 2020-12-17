<?php
    ob_start();
    session_start();
    include "config.php";

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql_login = mysqli_query($koneksi, "SELECT * FROM login Where username = '$username' AND password = '$password'");

        if(mysqli_num_rows($sql_login)>0)  {
            $row_login = mysqli_fetch_array($sql_login);
            $_SESSION ['login_id'] = $row_login['id'];
            $_SESSION ['login_username'] = $row_login['username'];
            header("location: firstpageadmin.php");
        }  else {
            header("location: logineror.php");
            exit();
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    
</head>
<body>
    <div class="loginbox">
        <h1>Login Admin</h1>
        <form method="POST" action="">
        <div class="textbox">
            <input type="type" placeholder="Username" name="username" value="">
        </div>

        <div class="textbox">
            <input type="password" placeholder="Password" name="password" value="">
                
        </div>
        <input class="btn" type="submit" name="submit" value="Sign In">
        

        </form>
    </div>
</body>
</html>
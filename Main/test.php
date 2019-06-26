<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img style="display:block; margin-left: auto; margin-right: auto; width: 50%;" src="e-uni_logo.jpg">
    <div id="frm">
        <form action="process.php" method="POST">
            <p>
                <label>Username:</label>
                <input type="text" id="username" name="username"/>
            </p>
            <p>
                <label>Password:</label>
                <input type="text" id="password" name = "password"/>
            </p>
            <p>
                <input type="button" onclick="window.location.href = 'me.php';"value = "login" class="registerbtn"/>
                <a href="index.php">Don't have an account?</a>
            </p>
            
        </form>
    </div>
</body>
</html>



<?php

$user = 'root';
$pass = '';
$db = 'test_1';

$db = new mysqli('localhost',$user, $pass, $db) or die("Failed to connect");

?>
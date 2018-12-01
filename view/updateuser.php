<!DOCTYPE html>
<?php

    require_once '../db/config.php';
    require_once 'Menu.php';
    require_once '../controller/updateUser.php';
?>

<html>
    <head>
        <title>Update Account</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../frontend/content.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="font-family: 'Montserrat', sans-serif;">
        <section style="font-family: 'Montserrat', sans-serif;" id="header" class="jumbotron text-center">
            <h1 style="font-family: 'Montserrat', sans-serif;" class="display-3">Update User Information</h1>
            <p style="font-family: 'Montserrat', sans-serif;" class="lead">Enter your UtahID and password to update your username and create a new password</p>
            <a href="loginform.php" class="btn btn-primary">Login</a>
            <a href="signup.php" class="btn btn-success">Join The Club</a>
        </section>
        <div style="text-align:center;"">
            <form method="POST" action="updateuser.php" style="font-family: 'Montserrat', sans-serif;">
                UtahID:<br>
                <input type='text' name='UtahID' placeholder='UtahID' required><br><br>
                Password:<br>
                <input type='password' name='pwd1' placeholder='Password' required><br><br>
                <br>
                <h4 style="font-family: 'Montserrat', sans-serif;">New Username & Password:</h4>
                <br>
                New Username:<br>
                <input type='text' name='username' placeholder='Username' required><br><br>
                New Password:<br>
                <input type='password' name='pwd2' placeholder='New Password' required><br><br>
                <input type='submit' value='Update'>
            </form>
        </div>
    </body>
</html>
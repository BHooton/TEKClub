<?php

//This page uses a form and connects the information to the DB to create a user.

require_once '../db/config.php';
require_once '../model/model.php';
require_once '../controller/SignUp.php';
require_once 'Menu.php';

session_start();

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->error){
    die("$conn->error");
}

?>
<html>
    <head>
        <title>
			Sign Up
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../frontend/content.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body style="font-family: 'Montserrat', sans-serif;">

    <section id="header" class="jumbotron text-center">
        <h1 class="display-3">Sign Up for TEK Club</h1>
        <p class="lead">Join the University of Utah's TEK Club Chapter</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>
        <!--form to sign up-->
        <div class='center_form'>
                <form method='post' action='signup.php'>
                    UtahID:<br>
                    <input type ='text' name='UtahID' required><br><br>
                    Username:<br>
                    <input type ='text' name='username' required><br><br>
                    Last Name:<br>
                    <input type ='text' name='LastName' required><br><br>
                    First Name:<br>
                    <input type ='text' name='FirstName' required><br><br>
                    Current Year (Graduate = Alumni)<br>
                    <input type ='text' name = 'CurrentYear' required><br><br>
                    Email Address:<br>
                    <input type = 'text' name = 'EmailAddress' required><br><br>
                    Current Employer:<br>
                    <input type ='text' name='CurrentCompany' required><br><br>
                    Position at Employer:<br>
                    <input type ='text' name='PositionatCompany' required><br><br>
                    Student or Alumni:<br><br>
                    <input type='text' name='role' required><br><br>
                    Password:<br>
                    <input type ='password' name='pwd' required><br><br>
                    <input type ='submit' name='create' value='Create User'><br>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>
        </div>
    </body>
</html>
<?php

//This page allows users to apply to be officers for the TEK club. They fill out a form and that information is inserted to the DB and displayed on a table on the viewapplications.php file. 

require_once '../controller/applyLeadership.php';
require_once 'Menu.php';

session_start();
//Attempting to block
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}

//require_once 'footer.php';
?>
<!DOCTYPE html>

<head>
<link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet'>
	<link rel='stylesheet' href='../frontend/navbar.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="font-family: 'Montserrat', sans-serif;">

<section id="header" class="jumbotron text-center" style="font-family: 'Montserrat', sans-serif;">
        <h1 class="display-3">Apply</h1>
        <p class="lead">Apply to be on the TEK Club Leadership Team</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>

<div>
</div>

<form style="text-align:center; font-family: 'Montserrat', sans-serif;" method="post" action="applyleadership.php">
    UtahID<br>
    <input type="text" name="UtahID" placeholder="UtahID" required><br><br>
    Last Name<br>
    <input type="text" name="LastName" placeholder="Last Name" required><br><br>
    First Name<br>
    <input type="text" name="FirstName" placeholder="First Name" required><br><br>
	Current Year<br>
    <input type="text" name="CurrentYear" placeholder="Class" required><br><br>
    Email Address<br>
    <input type="text" name="EmailAddress" placeholder="Email" required><br><br>
	Current Employer<br>
    <input type="text" name="CurrentCompany" placeholder="Employer" required><br><br>
	Postion at Employer<br>
    <input type="text" name="PositionatCompany" placeholder="Position" required><br><br>
	Why You Should be Selected as an Officer?<br>
	<textarea name="coverletter" placeholder="Answer" rows="5" cols="40"></textarea><br><br>
    <input type="submit" name="rsvp_submit" value="Submit"><br><br>
</form>
<br>
<br>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src='../frontend/navbar.js'></script>
</body>
</html>
<!DOCTYPE html>
<html>
<?php

//This page displays images from TEK Club events

require_once 'Menu.php';

session_start();
//Attempting to block
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}
	?>
<head>
	<title>Photos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	</head>
<body style="font-family: 'Montserrat', sans-serif;">


<section id="header" style="font-family: 'Montserrat', sans-serif;" class="jumbotron text-center">
        <h1 class="display-3">TEK Club Photo Gallery</h1>
        <p class="lead">Enjoy pictures from TEK Club events throughout the years!</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>

	<img src="../imgs/DELLvisit.jpg" width=425px height=350px>
	<img src="../imgs/Eccles.jpg" width=425px height=350px>
	<img src="../imgs/TwistSocial.jpg" width=425px height=350px>

	<img src="../imgs/aftermeeting.jpg" width=425px height=350px>
	<img src="../imgs/meettheteks.jpg" width=425px height=350px>
    <img src="../imgs/meettheteks5.jpg" width=425px height=350px>
    
    <img src="../imgs/meettheteks1.jpg" width=425px height=350px>
    <img src="../imgs/meettheteks2.jpg" width=425px height=350px>
    <img src="../imgs/meettheteks4.jpg" width=425px height=350px>

</body>
</html>
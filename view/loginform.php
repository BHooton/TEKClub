<?php

//This page allows users to login and start sessions so they can access other pages on the website

require_once '../db/config.php' ;
require_once '../controller/Login.php';
require_once 'Menu.php';

?>

<html>
	<head>
        <title>
            Login
		</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet'>
	<link rel='stylesheet' href='../frontend/navbar.css'>
	<link href='../frontend/content.css' type='text/css' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Chakra+Petch|Share+Tech+Mono' rel='stylesheet'>
  	<link href='../frontend/content.css' type='text/css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
	<link href='https://fonts.googleapis.com/css?family=Chakra+Petch|Share+Tech+Mono' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
	<body style="font-family: 'Montserrat', sans-serif;">
	
	<section id="header" class="jumbotron text-center">
        <h1 class="display-3">Welcome!</h1>
        <p class="lead">Please login into your TEK Club Account to view more pages</p>
        <a href="signup.php" class="btn btn-primary">Sign Up</a>
        <a href="logout.php" class="btn btn-success">Logout</a>
    </section>
	<br>
		<div>
		<form style="text-align:center; font-family: 'Montserrat', sans-serif;" autocomplete ="off" method='post' action='loginform.php'>
				UtahID:<br>
				<input type='text' name='UtahID' placeholder='UtahID'><br><br>
				Password:<br>
				<input type='password' name='pwd' placeholder='Password'><br><br>
				<input type='submit' value='Login'>
		</form>
		</div>
		<br>
		<div align="center">
			<img src='../imgs/MainTekLogo.png' alt='logo'>
		</div>
		<br>
		<div align="center">
			<img src='../imgs/SFEBBLogo.png' alt='SFEBB'>
		</div>
	</body>
</html>
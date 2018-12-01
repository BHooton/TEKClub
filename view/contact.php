<!DOCTYPE html>
<html>
<head>
	<?php

	//This page allows users to message the TEK Club. Message is stored in DB.

	require_once 'Menu.php';
	?>
    <title>
        Contact Us
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="font-family: 'Montserrat', sans-serif;">

	<section id="header" class="jumbotron text-center">
        <h1 class="display-3">Contact the TEK Leadership Team</h1>
        <p class="lead">Complete the following form to send a message to TEK Club Leadership</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>
    <br>
    <form style='text-align:center' method="post" action="contact.php">
        Name:<br> <input type="text" name="FullName" placeholder="Name"><br><br>
        E-mail:<br> <input type="text" name="email" placeholder="Email"><br><br>
        Comment:<br> <textarea name="comment" placeholder="Message" rows="5" cols="40"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
	</form>
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

<?php

//Add data to DB
require_once '../view/Messages.php';
?>


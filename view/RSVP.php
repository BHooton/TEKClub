<!DOCTYPE html>
<?php

//This page allows users to RSVP for events. The information from the form is posted to the DB and can be pulled as a table to the webpage.

session_start();
//Attempting to block
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}

?>
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

	<header>
		<button class='toggle-nav'>
			<span>></span>
				</button>
					<ul class='nav'>
						<li class='loud'><a href='index.php'>Home</a></li>
							<li class='loud'><a href='RSVP.php'>RSVP</a></li>
							<li class='loud'><a href='calendar_final.php'>Events</a></li>
							<li class='loud'><a href='applyleadership.php'>Apply for Leadership</a></li>
							<li class='loud'><a href='suggestevent.php'>Suggest Event</a></li>
							<li class='loud'><a href='gallery.php'>Photos</a></li>
							<li class='loud'><a href='annoucements.php'>Announcements</a></li>
					</ul>
				<br>
	</header>

	<section id="header" class="jumbotron text-center" style="font-family: 'Montserrat', sans-serif;">
        <h1 class="display-3">RSVP for TEK Club Events</h1>
        <p class="lead">RSVP for events you plan on attending this semester</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>

	<form style="text-align:center; font-family: 'Montserrat', sans-serif;" method="post" action="RSVP.php">
		UtahID<br>
		<input type="text" name="UtahID" placeholder="Utah ID"><br><br>
		Email Address<br>
		<input type="text" name="Email" placeholder="Email"><br><br>
		Event Title<br>
		<input type="text" name="EventTitle" placeholder="Event Title"><br><br>
		<input type="submit" name="rsvp_submit" value="Submit"><br>
	</form>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src='../frontend/navbar.js'></script>

</body>
</html>
<?php

	//Add RSVP
	require_once '../controller/CreateRSVP.php'

?>
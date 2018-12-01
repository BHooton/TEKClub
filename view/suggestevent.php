<!DOCTYPE html>
<?php

//Block users who are not signed in
	session_start();
	if(!isset($_SESSION['UtahID'])){
    	header("Location: ../view/loginform.php");
    	exit();
	}
?>
<head>

	<!--Import files for formatting-->
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
	
	<!--Menu-->
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

	<!--Jumbotron Header-->
	<section id="header" style="font-family: 'Montserrat', sans-serif;" class="jumbotron text-center">
        <h1 class="display-3">Suggest a TEK Club Event</h1>
        <p class="lead">Reccomend Events You Would Like the TEK Club to Host</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>

	<!--form to submit suggested event-->
	<form style="text-align: center; font-family: 'Montserrat', sans-serif;" method="post" action="suggestevent.php">
    	Event Title<br>
    	<input type="text" name="esTitle" placeholder="Title" required><br><br>
    	Event Description<br>
    	<input type="text" name="esDesc" placeholder="Description" required><br><br>
    	Suggested Company<br>
    	<input type="text" name="esCompany" placeholder="Company" required><br><br>
    	<input type="submit" name=rsvp_submit" value="Submit"><br>
	</form>
	<br>
	<br>
</body>
</html>

<?php
	//Logic to create suggested event and submit it to DB
	require_once '../controller/CreateSuggestedEvent.php'
?>
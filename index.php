<?php

require_once '../db/config.php' ;
require_once '../backend/Login.php';

?>
<html>

<head>
	<title>TEK Club</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>

<!--HEADER-->
<!--<div class="jumbotron text-center">
	<h1>TEK Club</h1>
	<p>We specialize in connecting students with the education they are recieving to the companies they hope to work for</p>
</div>-->

<body id="myPage">

<!--NAVBAR-->

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="home.php">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Student
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="loginform.php">Login</a></li>
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="annoucements.php">Annoucements</a></li>
					<li><a href="gallery.php">Photos</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Alumni
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="loginform.php">Login</a></li>
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="annoucements.php">Annoucements</a></li>
					<li><a href="gallery.php">Photos</a></li>
				</ul>
			</li>
			<li><a href="contact.php">Contact Information</a></li>
		</ul>
	</div>
</nav>
			<!--
			<li class="active"><a href="home.html">Home</a></li>
			<li class="active"><a href="TekCalendar">Calendar</a></li>
			<li class="active"><a href="createmember.php">Student Sign Up</a></li>
			<li class="active"><a href="createuser.php">Alumni Sign Up</a></li>
			<li class="active"><a href="#">Contact Information</li>
				<ul class="dropdown-menu">
					<li><a href="#">Alumni</a></li>
					<li><a href="#">Current Students</a></li>
					<li><a href="#">Administration</a></li>
				</ul>
			</li>
		</ul>
	<ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="#"<span class="glyphicon-log-in"></span> Login</a></li>
	</ul>
	</div>
</nav>
-->
<!--
<div align='center'>
    <form method='post' action='index.php'>
		<table>
			<tr>
				<td>Utah ID: </td>
				<td><input type='text' name='UtahID'></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type='password' name='pwd'></td>
			</tr>
			<tr>
				<td><input type='submit' value='Login'></td>
				<td></td>
			</tr>
		</table>
    </form>
</div>
-->

<!--NAVBAR--
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../imgs/Twistsocial.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>University of Utah TEK Club</h5>
            <p>Join Today!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/Dellvisit.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Network with Peers</h5>
            <p>Connect with students who share similar interests.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/Eccles.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Visit Companies</h5>
            <p>Tour local companies and learn about their information systems.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Find Employment Opportunities</h5>
            <p>TEK Members are invited to attend Meet the TEKs!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks1.jpg" alt="Fifth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Enchance Your Education</h5>
            <p>Taking your colelge experience beyond the classroom.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks2.jpg" alt="Sixth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Guest Speakers</h5>
            <p>TEK hosts guest speakers from the industry to answer your questions</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks4.jpg" alt="Seventh slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Build Your Resume</h5>
            <p>Add to your job applicaitons through volunteer and leadership opportunities!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks5.jpg" alt="Eigth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Learn About Information Systems</h5>
            <p>Gain a rich insight to the Infomation System program!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/aftermeeting.jpg" alt="Ninth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Alumni are Welcome!</h5>
            <p>Graduates are encouraged to build a profile to stay connected with the TEK team!</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->

<!--
<div class="carousel-item active">
      <img class="d-block w-100" src="../imgs/Twistsocial.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>University of Utah TEK Club</h5>
            <p>Join Today!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/Dellvisit.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Network with Peers</h5>
            <p>Connect with students who share similar interests.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/Eccles.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Visit Companies</h5>
            <p>Tour local companies and learn about their information systems.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Find Employment Opportunities</h5>
            <p>TEK Members are invited to attend Meet the TEKs!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks1.jpg" alt="Fifth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Enchance Your Education</h5>
            <p>Taking your colelge experience beyond the classroom.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks2.jpg" alt="Sixth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Guest Speakers</h5>
            <p>TEK hosts guest speakers from the industry to answer your questions</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks4.jpg" alt="Seventh slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Build Your Resume</h5>
            <p>Add to your job applicaitons through volunteer and leadership opportunities!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/meettheteks5.jpg" alt="Eigth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Learn About Information Systems</h5>
            <p>Gain a rich insight to the Infomation System program!</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imgs/aftermeeting.jpg" alt="Ninth slide">
      <div class="carousel-caption d-none d-md-block">
            <h5>Alumni are Welcome!</h5>
            <p>Graduates are encouraged to build a profile to stay connected with the TEK team!</p>
    </div>
-->		
<!-- Footer -->
<footer class="container-fliud text-center">
	<a href="#myPage" title="To Top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
</footer>

</html>
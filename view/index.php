<?php

//This serves as the homepage for the website

require_once '../db/config.php' ;
require_once '../controller/Login.php';
require_once 'Menu.php';
?>
<html>

<head>
  <title>TEK Club</title>
  <link rel='stylesheet' href='../frontend/content.css'>
  <link rel='stylesheet' href='../frontend/viewtable.css'>
  <link rel='stylesheet' href='../frontend/navbar.css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="font-family: 'Montserrat', sans-serif;" id="myPage">

 <section id="header" class="jumbotron text-center">
        <h1 class="display-3" style="font-family: 'Montserrat', sans-serif;">University of Utah TEK Club</h1>
        <p class="lead" style="font-family: 'Montserrat', sans-serif;">Welcome to the Univeristy of Utah's TEK Club chapter. Read about our upcoming events and join our club</p>
        <a href="loginform.php" style="font-family: 'Montserrat', sans-serif;" class="btn btn-primary">Login</a>
        <a href="signup.php" style="font-family: 'Montserrat', sans-serif;" class="btn btn-success">Join The Club</a>
    </section>

    <div class = "container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" ></li>
        <li data-target="#myCarousel" data-slide-to="2" ></li>
        <li data-target="#myCarousel" data-slide-to="3" ></li>
        <li data-target="#myCarousel" data-slide-to="4" ></li>
        <li data-target="#myCarousel" data-slide-to="5" ></li>
        <li data-target="#myCarousel" data-slide-to="6" ></li>
        <li data-target="#myCarousel" data-slide-to="7" ></li>
        <li data-target="#myCarousel" data-slide-to="8" ></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="../imgs/TwistSocial.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/DELLVisit.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/Meettheteks2.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/Meettheteks4.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/Eccles.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/Meettheteks.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/aftermeeting.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/meettheteks1.jpg" alt="" style="width: 100%;">
    </div>

    <div class ="item">
      <img src="../imgs/meettheteks5.jpg" alt="" style="width: 100%;">
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <br>
    <br>
    <h3 align="center">Upcoming Events:</h3>

    <section id="gallery">
       <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#g" alt="">
                        <div style="font-family: 'Montserrat', sans-serif;" class="card-body">
                            <h5 style="font-family: 'Montserrat', sans-serif;" class="card-title">Opening Social</h5>
                            <p style="font-family: 'Montserrat', sans-serif;" class="card-text">Join us for a fun night of Trivia questions and pizza! We will be giving prizes to the top teams, so come prepared!</p>
                            <div><small style="font-family: 'Montserrat', sans-serif;" class="text-muted text-right">9/12/2018</small></div><br>
                            <a href="RSVP.php" style="font-family: 'Montserrat', sans-serif; color:#DC143C; font-weight: bold;" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">CHG Company Visit</h5>
                            <p class="card-text" style="font-family: 'Montserrat', sans-serif;">Join us in visiting CHG Healthcare to learn about the technical opportunities they offer and the work they do!</p>
                            <div><small class="text-muted text-right" style="font-family: 'Montserrat', sans-serif;">9/21/2018</small></div><br>
                            <a href="RSVP.php" style="font-family: 'Montserrat', sans-serif; color:#DC143C; font-weight: bold;" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">DOMO Workshop</h5>
                            <p class="card-text" style="font-family: 'Montserrat', sans-serif;">What is Domo? Domo is a cloud service that unifies real-time business with dashboard visualization.</p>
                            <div><small style="font-family: 'Montserrat', sans-serif;" class="text-muted text-right">9/26/2018</small></div><br>
                            <a href="RSVP.php" style="font-family: 'Montserrat', sans-serif; color:#DC143C; font-weight: bold;" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
            </div>

<!-- Footer -->
<footer style="color:#DC143C" class="container-fliud text-center">
	<a href="#myPage" title="To Top">
		<span style='color:#DC143C;'class="glyphicon glyphicon-chevron-up"></span>
	</a>
</footer>

</html>
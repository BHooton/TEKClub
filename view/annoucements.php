<!doctype html>
<html lang="en">

<?php

//This page lists announcements for club members. 

require_once 'Menu.php';

session_start();
//Attempting to block
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}
?>

<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
</head>

<body style="font-family: 'Montserrat', sans-serif;">

    <section style="font-family: 'Montserrat', sans-serif;" id="header" class="jumbotron text-center">
        <h1 class="display-3">Annoucements</h1>
        <p class="lead">Stay up to date with the club</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>

    <section id="gallery" style="font-family: 'Montserrat', sans-serif;">
       <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#g" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Officer Positions Open!</h5>
                            <p class="card-text">Apply to become an officer for the upcoming semester. Our team will have open positions as many of the current officers are graduating with thier degrees. Please apply through the website and our team will reach out to your to schedule an interview.</p>
                            <div><small class="text-muted text-right">9/12/2018</small></div><br>
                            <a href="applyleadership.php" class="btn btn-outline-success btn-sm">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Fees for Spring Semester</h5>
                            <p class="card-text">We are halfway throught the Academic year! Remember, TEK Club fees are 50% for Spring Semester. Join the club and start receiving fantastic benefits!</p>
                            <div><small class="text-muted text-right">9/21/2018</small></div><br>
                            <a href="signup.php" class="btn btn-outline-success btn-sm">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Help Us Plan Events</h5>
                            <p class="card-text">Our leadership team is committed to hosting events that all students will enjoy. To help us with this process, please submit event ideas to our team for consideration.</p>
                            <div><small class="text-muted text-right">9/26/2018</small></div><br>
                            <a href="suggestevent.php" class="btn btn-outline-success btn-sm">Suggest Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </section>

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>


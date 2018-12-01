<!doctype html>
<html lang="en">
<?php

//This page is the calendar for TEK club events. Users can click on a button to take them to the RSVP page.

session_start();
//Attempting to block
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}


require_once 'Menu.php';
require_once '../controller/Login.php';
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <title>Calendar</title>
</head>

<body style="font-family: 'Montserrat', sans-serif;">
		
    <section id="header" style="font-family: 'Montserrat', sans-serif;" class="jumbotron text-center">
        <h1 class="display-3">Events</h1>
        <p class="lead">TEK Club events are for club members. Be sure to sign up and RSVP for each event.</p>
        <a href="RSVP.php" class="btn btn-primary">RSVP</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>

    <section id="gallery" style="font-family: 'Montserrat', sans-serif;">
       <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#g" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Opening Social</h5>
                            <p class="card-text">Join us for a fun night of Trivia questions and pizza! We will be giving prizes to the top teams, so come prepared!</p>
                            <div><small class="text-muted text-right">9/12/2018</small></div><br>
                            <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">CHG Company Visit</h5>
                            <p class="card-text">Join us in visiting CHG Healthcare to learn about the technical opportunities they offer and the work they do!</p>
                            <div><small class="text-muted text-right">9/21/2018</small></div><br>
                            <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">DOMO Workshop</h5>
                            <p class="card-text">What is Domo? Domo is a cloud service that unifies every component of an organization with real-time business dashboard visualization and KPI reporting—connecting everyone and everything.</p>
                            <div><small class="text-muted text-right">9/26/2018</small></div><br>
                            <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="#g" alt="">
                            <div class="card-body">
                                <h5 class="card-title">IS Paths</h5>
                                <p class="card-text">Okay team, we are extremely excited to announce our biggest career event yet.</p>
                                <div><small class="text-muted text-right">10/03/2018</small></div><br>
                                <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="#" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Meet The Teks</h5>
                                <p class="card-text">Don't miss this event! Meet the TEKs is a specialized recruiting and networking event for students with business and technology skills. It's a great opportunity whether you're ready to look for an internship or full-time job, or you just want to learn more about companies and positions to help shape your career goals.
</p>
                                <div><small class="text-muted text-right">10/18/2018</small></div><br>
                                <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="#" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Women & Tech Careers Panel</h5>
                                <p class="card-text">Join us for the 6th annual Women & Tech Careers Panel!  A fabulous panel of women working in a wide variety of tech-related jobs talk about their jobs, how they go to where they are, what advice they have.  Appetizers and time to chat with the panelists one-on-one after the panel.  This is a great event for anyone who wants to learn more about different tech related jobs.  Women and men welcome to attend!  </p>
                                <div><small class="text-muted text-right">11/08/2018</small></div><br>
                                <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="#g" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">DOMO Hackathon Competition</h5>
                                    <p class="card-text">Create a team and collaborate on software with DOMO, with great prizes including access to networking events, interviews, and cash. Open to all students in the Eccles Business School.</p>
                                    <div><small class="text-muted text-right">11/09/2018</small></div><br>
                                    <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="#" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">UGirls Code</h5>
                                    <p class="card-text">Middle and high school age girls are invited to campus for the morning to have fun learning some coding. We'll need some TEK members to help facilitate the learning sessions, which will be led by Oracle employees.</p>
                                    <div><small class="text-muted text-right">11/10/2018</small></div><br>
                                    <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="#" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Overstock Workshop</h5>
                                    <p class="card-text">Activities are a hands-on exercise for all students (bring your laptop), come to win swag or prizes, job or internship info.</p>
                                    <div><small class="text-muted text-right">11/29/2018</small></div><br>
                                    <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                                </div>
                            </div>
                        </div>
                    </div>
       </div>
    </section>
    <br>
    <br>
    <br>
    <br>

</body>

</html>
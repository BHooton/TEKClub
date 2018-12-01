<!DOCTYPE html>
<?php

//This page allows users to view avaliable content and functionality as TEK Club members

require_once 'Menu.php';

session_start();
//Attempting to block
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}


?>
<html>
<head>
<title>TEK Club: $userstr</title>
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet'.>
    <link rel='stylesheet' href='../frontend/navbar.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src='../frontend/navbar.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet'>
	<link rel='stylesheet' href='../frontend/navbar.css'>
	<link href='../frontend/content.css' type='text/css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Chakra+Petch|Share+Tech+Mono' rel='stylesheet'>
  	<link href='../frontend/content.css' type='text/css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
	<link href='https://fonts.googleapis.com/css?family=Chakra+Petch|Share+Tech+Mono' rel='stylesheet'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		</head>
		<body style="font-family: 'Montserrat', sans-serif;">
                    <section id="header" class="jumbotron text-center">
        <h1 class="display-3">Welcome TEK Club Member!</h1>
        <p class="lead">Please use the navigation bar to find more webpages.</p>
        <a href="RSVP.php" class="btn btn-primary">RSVP</a>
        <a href="logout.php" class="btn btn-success">Logout</a>
    </section>

    <section id="gallery" style="font-family: 'Montserrat', sans-serif;">
       <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#g" alt="">
                        <div class="card-body">
                            <h5 class="card-title">RSVP for Events</h5>
                            <p class="card-text">The following button will take you to a form to RSVP for upcoming events. Remember, RSVPs are important to our leadership team becasue it helps us purchase food for events.</p>
                            <a href="RSVP.php" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Apply to Be an Officer</h5>
                            <p class="card-text">Apply to become an officer for the upcoming semester. Our team will have open positions as many of the current officers are graduating with thier degrees. Please apply through the website and our team will reach out to your to schedule an interview.</p>
                            <a href="applyleadership.php" class="btn btn-outline-success btn-sm">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Suggest an Event</h5>
                            <p class="card-text">Our leadership team is committed to hosting events that all students will enjoy. To help us with this process, please submit event ideas to our team for consideration.</p>                            
                            <a href="suggestevent.php" class="btn btn-outline-success btn-sm">Suggest Event</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#g" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Event Calendar</h5>
                            <p class="card-text">The following button will take you to a form to RSVP for upcoming events. Remember, RSVPs are important to our leadership team becasue it helps us purchase food for events.</p>
                            <a href="calendar_final.php" class="btn btn-outline-success btn-sm">RSVP</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Photo Gallery</h5>
                            <p class="card-text">View photos from past TEK Club events including Meet the TEKs and company tours.</p>
                            <a href="gallery.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Annoucements</h5>
                            <p class="card-text">Follow our club's recent announcements to recieve the most up-to-date news about events and your membership benefits</p>                            
                            <a href="annoucements.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#g" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Update Account Information</h5>
                            <p class="card-text">Fill out the form to update your account username and password. You will need your UtahID and current password to reset your old information</p>
                            <a href="updateuser.php" class="btn btn-outline-success btn-sm">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </section>

    <footer style="color:#DC143C" class="container-fliud text-center">
	<a href="#myPage" title="To Top">
		<span style='color:#DC143C;'class="glyphicon glyphicon-chevron-up"></span>
	</a>
    </footer>

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src='../frontend/navbar.js'></script>

</body>

</html>
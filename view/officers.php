<!DOCTYPE html>
<?php

//This Page is the landing page for officer content. From this page, users can navigate through functionality for club management

require_once 'Menu.php';

//Role Management. 1st, checks if the user is logged in. 2nd, checks if the user has an "admin" role.
session_start();
//Attempting to block
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}

if($_SESSION['role'] != 'admin'){
    header("Location: ../view/accessdenied.php");
}
?>
<html>
<head>
<title>TEK Club: $userstr</title>
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
		</head>
		<body style="font-family: 'Montserrat', sans-serif;">
        <section style="font-family: 'Montserrat', sans-serif;" id="header" class="jumbotron text-center">
        <h1 class="display-3">Welcome!</h1>
        <p class="lead">Please use the navigation bar to find more webpages.</p>
        <a href="RSVP.php" class="btn btn-primary">RSVP</a>
        <a href="logout.php" class="btn btn-success">Logout</a>
        </section>

    <section id="gallery" style="font-family: 'Montserrat', sans-serif;">
       <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">View Event RSVPSs</h5>
                            <p class="card-text">Track what members are attending which events.</p>
                            <a href="viewRSVP.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Ban Users</h5>
                            <p class="card-text">Ban TEK Club members who have failed to pay their fees or broke club policies.</p>
                            <a href="bannedUsers.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">View Suggested Events</h5>
                            <p class="card-text">Manage events suggested by members. Suggested events are viewable by officers and can be deleted if the event will not be planned in the future.</p>                            
                            <a href="es_view.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#g" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Upload Image Paths</h5>
                            <p class="card-text">Use this form to add the path of uploaded images within the website's source code. This will help future officers track and manage club images.</p>
                            <a href="submitIMG.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">View Leadership Applicatoins</h5>
                            <p class="card-text">Review applications submitted by TEK club members for leadership opportunities.</p>
                            <a href="viewapplications.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">View Contact Messages</h5>
                            <p class="card-text">Read messages sent to the leadership team through the website.</p>                            
                            <a href="messageview.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">View Leadership Roster</h5>
                            <p class="card-text">Add or delete officers from the the Leadership roster. Use this information for contact purposes.</p>
                            <a href="leadershiproster.php" class="btn btn-outline-success btn-sm">View</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="#" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Delete Website Users</h5>
                            <p class="card-text">Delete users from the club database</p>
                            <a href="deleteuser.php" class="btn btn-outline-success btn-sm">Delete User</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       </div>
    </section>

    <!--JS-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src='../frontend/navbar.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script  src='../frontend/navbar.js'></script>
    


</body>

</html>
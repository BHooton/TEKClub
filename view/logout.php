<?php

//This page destroys user sessions. Clicking on the 'logout' tab on the menu bar will log the person out without bringing up the page and form.


require_once 'Menu.php';

session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $token = $_SESSION['token'];
    destroy_session_and_data();
    header("Location: ../view/index.php");
} else {
    echo "Error -- user not in session";
}
function destroy_session_and_data()
{
    $_SESSION = array();
    setCookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}
?>
<html>
<head>
    <title>Logout</title>
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
<section id="header" class="jumbotron text-center">
        <h1 class="display-3">Welcome!</h1>
        <p class="lead">Please use the navigation bar to find more webpages.</p>
        <a href="#" class="btn btn-primary">RSVP</a>
        <a href="logout.php" class="btn btn-success">Logout</a>
    </section>
<div>
<form style='text-align: center' action='logout.php'>
    <input type='submit' value='Logout'>
    </form>
<br><br></div>
</body>
</html>
<!DOCTYPE html>
<?php

//add menu bar
require_once 'Menu.php';

//block users who are not signed in
session_start();
if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}
if($_SESSION['role'] != 'admin'){
    header("Location: ../view/accessdenied.php");
}
?>

<!--Add scripts and links for bootstrap and CSS files-->
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../frontend/viewtable.css">
</head>
<body style="font-family: 'Montserrat', sans-serif;">

<!--Jumbotron header-->
<section id="header" class="jumbotron text-center" style="font-family: 'Montserrat', sans-serif;">
        <h1 class="display-3">Current RSVPs</h1>
        <p class="lead">List of students who have RSVPed for upcoming club events</p>
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="officers.php" class="btn btn-success">Officers</a>
    </section>

<!--Format and display a heading for RSVP table-->
<h3 style="text-align: center; font-family: 'Montserrat', sans-serif;"> RSVP List:</h3>
</body>
</html>

<?php

// Create connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Query to pull data from DB
$sql = "SELECT UtahID, Email, EventTitle FROM rsvp";
$result = $conn->query($sql);

//Check if data is present in table
if ($result->num_rows > 0) {

	//format table and add header
	//echo "<div style='text-align: center;>";
    echo "<table class='centertable'align='center' width='90%'>\n";
    echo '<tr>'."\n";
    echo "<th>Utah</th>\n". "<th>Email</th>\n"."<th>EventTitle</th>\n";

    // output data of each row
    while($row = $result->fetch_assoc()) {

       //Build Table for fetch_assoc data
        echo '<tr>'."\n";
        echo "<td>{$row['UtahID']}</td>\n" . "<td>{$row['Email']}</td>\n". "<td>{$row['EventTitle']}</td>\n";
		echo '</tr>'."\n";
		//echo '</div>';

    }
} else {
    //Tell user that DB is empty
    echo "0 results";
}
$conn->close();
?>
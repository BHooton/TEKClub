<!DOCTYPE html>
<?php

//Add menu bar
require_once 'Menu.php';
require_once 'DeleteUser.php';

//Block users who are not signed in. 
session_start();

if(!isset($_SESSION['UtahID'])){
    header("Location: ../view/loginform.php");
    exit();
}

?>

<!--Import files for bootstrap and formatting-->
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../frontend/viewtable.css">
</head>
<body style="font-family: 'Montserrat', sans-serif;">

	<!--Jumbotron header-->
	<section style="font-family: 'Montserrat', sans-serif;" id="header" class="jumbotron text-center">
        <h1 class="display-3">Delete Users</h1>
        <p class="lead">Fillout the form below to delete users from the TEK Club Database</p>
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="officers.php" class="btn btn-success">Officers</a>
		</section>
		
		<!--Form to delete application from the DB table-->
		<div class='center_form'>
		<form style='text-align: center;' method="post" action="deleteuser.php">
		UtahID:<br>
		<input type="text" name="UtahID" placeholder="UtahID" required><br><br>
		Last Name:<br>
    	<input type="text" name="LastName" placeholder="Last Name" required><br><br>
    	First Name:<br>
    	<input type="text" name="FirstName" placeholder="First Name" required><br><br>
    	<input type="submit" name="rsvp_submit" value="Delete"><br><br>
		</form>

<?php

//Connect to DB and display table on webpage
require_once '../controller/DeleteUser.php';

// Create connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Query to pull data from DB
$sql = "SELECT UtahID, username, LastName, FirstName, CurrentYear, EmailAddress, CurrentCompany, PositionatCompany FROM users";
$result = $conn->query($sql);

//Check if data is present in table
if ($result->num_rows > 0) {

    //format table and add header
    echo "<table width='100%'>\n";
    echo '<tr>'."\n";
    echo "<th>UtahID</th>\n". "<th>Username</th>\n". "<th>Last Name</th>\n"."<th>First Name</th>\n"."<th>Current Year</th>\n"."<th>Email Address</th>\n"."<th>Current Company</th>\n"."<th>PositionatCompany</th>\n";

    // output data of each row
    while($row = $result->fetch_assoc()) {

       //Build Table for fetch_assoc data
        echo '<tr>'."\n";
        echo "<td>{$row['UtahID']}</td>\n" ."<td>{$row['username']}</td>\n" . "<td>{$row['LastName']}</td>\n". "<td>{$row['FirstName']}</td>\n"."<td>{$row['CurrentYear']}</td>\n"."<td>{$row['EmailAddress']}</td>\n"."<td>{$row['CurrentCompany']}</td>\n"."<td>{$row['PositionatCompany']}</td>\n";
        echo '</tr>'."\n";

    }
} else {
    //Tell user that DB is empty
    echo "0 results";
}
$conn->close();
?>
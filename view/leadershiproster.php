<!DOCTYPE html>
<?php

//This file displays the roster of TEK Club Officers. Listings can be deleted from the table and DB through the form.

require_once 'Menu.php';

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

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../frontend/viewtable.css">
</head>
<body style="font-family: 'Montserrat', sans-serif;">

<section id="header" style="font-family: 'Montserrat', sans-serif;" class="jumbotron text-center">
        <h1 class="display-3">TEK Club Leadership Team</h1>
        <p class="lead">Find information about TEK Club Leadership Team</p>
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="officers.php" class="btn btn-success">Officers</a>
    </section>

<form style="text-align:center; font-family: 'Montserrat', sans-serif;" method="post" action="leadershiproster.php">
    UtahID<br>
    <input type="text" name="UtahID" placeholder="UtahID" required><br><br>
    Last Name<br>
    <input type="text" name="LastName" placeholder="First Name" required><br><br>
    First Name<br>
    <input type="text" name="FirstName" placeholder="Last Name" required><br><br>
    Leadership Position<br>
    <input type="text" name="TeamPosition" placeholder="Position" required><br><br>
    Class<br>
    <input type="text" name="CurrentYear" placeholder="Class" required><br><br>
    Email<br>
    <input type="text" name="EmailAddress" placeholder="Email" required><br><br>
    Current Employeer<br>
    <input type="text" name="CurrentCompany" placeholder="Company" required><br><br>
    Position at Company<br>
    <input type="text" name="PositionatCompany" placeholder="Position" required><br><br>
    <input type="submit" name="rsvp_submit" value="Add Leader"><br>
</form>
<br>
<br>
</body>
</html>

<?php

//Add Banned users file
require_once '../controller/addLeadershipRoster.php';

// Create connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Query to pull data from DB
$sql = "SELECT UtahID, LastName, FirstName, TeamPosition, CurrentYear, EmailAddress, CurrentCompany, PositionatCompany FROM leadershipteam";
$result = $conn->query($sql);

//Check if data is present in table
if ($result->num_rows > 0) {

    //format table and add header
    echo "<table width='100%'>\n";
    echo '<tr>'."\n";
    echo "<th>Utah ID</th>\n". "<th>Last Name</th>\n"."<th>First Name</th>\n"."<th>Leadership Position</th>\n". "<th>Current Year</td>\n"."<th>Email</th>\n"."<th>CurrentCompany</th>\n"."<th>PositionatCompany</th>\n";

    // output data of each row
    while($row = $result->fetch_assoc()) {

       //Build Table for fetch_assoc data
        echo '<tr>'."\n";
        echo "<td>{$row['UtahID']}</td>\n". "<td>{$row['LastName']}</td>\n". "<td>{$row['FirstName']}</td>\n". "<td>{$row['TeamPosition']}</td>\n". "<td>{$row['CurrentYear']}</td>\n"."<td>{$row['EmailAddress']}</td>\n"."<td>{$row['CurrentCompany']}</td>\n"."<td>{$row['PositionatCompany']}</td>\n";
        echo '</tr>'."\n";

    }
} else {
    //Tell user that DB is empty
    echo "0 results";
}
$conn->close();
?>

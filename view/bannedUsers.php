<!DOCTYPE html>
<?php

//This page allows officers to ban users. The form posts information about the users to the DB and displays the information in a table

require_once 'Menu.php';
//require_once 'footer.php';
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

<section style="font-family: 'Montserrat', sans-serif;" id="header" class="jumbotron text-center">
        <h1 class="display-3">Banned TEK Club Users</h1>
        <p class="lead">Below are messages submitted by TEK Club Members</p>
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="officers.php" class="btn btn-success">Officers</a>
    </section>

<form style="text-align:center; font-family: 'Montserrat', sans-serif;" method="post" action="bannedUsers.php">
    UtahID:<br>
    <input type="text" name="UtahID" placeholder="UtahID" required><br><br>
    First Name:<br>
    <input type="text" name="FirstName" placeholder="First Name" required><br><br>
    Last Name:<br>
    <input type="text" name="LastName" placeholder="Last Name" required><br><br>
    Reason:<br>
    <textarea name="Reason" placeholder="Reason" required></textarea><br><br>
    <input type="submit" name=rsvp_submit" value="Submit"><br>
</form>
<br>
<br>

<h3 style="text-align: center; font-family: 'Montserrat', sans-serif;"> Banned List:</h3>
</body>
</html>

<?php

//Add Banned users file
require_once '../controller/addBannedUser.php';

// Create connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Query to pull data from DB
$sql = "SELECT UtahID, FirstName, LastName, Reason FROM userseliminated";
$result = $conn->query($sql);

//Check if data is present in table
if ($result->num_rows > 0) {

    //format table and add header
    echo "<table width='100%'>\n";
    echo '<tr>'."\n";
    echo "<th>UtahID</th>\n". "<th>FIrstName</th>\n"."<th>LastName</th>\n"."<th>Reason</th>\n";

    // output data of each row
    while($row = $result->fetch_assoc()) {

       //Build Table for fetch_assoc data
        echo '<tr>'."\n";
        echo "<td>{$row['UtahID']}</td>\n" . "<td>{$row['FirstName']}</td>\n". "<td>{$row['LastName']}</td>\n". "<td>{$row['Reason']}</td>\n";
        echo '</tr>'."\n";

    }
} else {
    //Tell user that DB is empty
    echo "0 results";
}
$conn->close();
?>
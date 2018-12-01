<!DOCTYPE html>
<?php

//This page allows officers to view messages from users. It pulls info from the database and presents itself as a table. 

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

<div>
<section id="head_er" class="jumbotron text-center">
        <h1 class="display-3">View Member Messages</h1>
        <p class="lead">Below are messages submitted by TEK Club Members</p>
        <a href="loginform.php" class="btn btn-primary">Login</a>
        <a href="signup.php" class="btn btn-success">Join The Club</a>
    </section>
</div>

<form style="text-align: center; font-family: 'Montserrat', sans-serif;" method="post" action="messageview.php">
	MessageID<br>
	<input type="text" name="MessageID" placeholder="ID" required><br>
	<br>
    <input type="submit" name="rsvp_submit" value="Delete"><br>
</form>
<br>
</body>
</html>

<?php

require_once '../controller/DeleteMessage.php';

// Create connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Query to pull data from DB
$sql = "SELECT MessageID, FullName, email, comment FROM contactform";
$result = $conn->query($sql);

//Check if data is present in table
if ($result->num_rows > 0) {

    //format table and add header
    echo "<table width='100%'>\n";
    echo '<tr>'."\n";
    echo "<th>MessageID</th>\n". "<th>FullName</th>\n"."<th>Email</th>\n"."<th>Message</th>\n";

    // output data of each row
    while($row = $result->fetch_assoc()) {

       //Build Table for fetch_assoc data
        echo '<tr>'."\n";
        echo "<td>{$row['MessageID']}</td>\n" . "<td>{$row['FullName']}</td>\n". "<td>{$row['email']}</td>\n". "<td>{$row['comment']}</td>\n";
        echo '</tr>'."\n";

    }
} else {
    //Tell user that DB is empty
    echo "0 results";
}
$conn->close();
?>
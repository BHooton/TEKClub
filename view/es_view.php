<!DOCTYPE html>
<?php

//This page allows officers to view events suggested by members. Officers can delete entries from the table and DB.

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

<section style="font-family: 'Montserrat', sans-serif;" id="header" class="jumbotron text-center">
        <h1 class="display-3">Suggested Events</h1>
        <p class="lead">Below are events suggested by members</p>
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="officers.php" class="btn btn-success">Officers</a>
    </section>

<div class='center_form'>
<form style='text-align: center;' method="post" action="es_view.php">
	Suggested Event ID<br>
	<input type="text" name="eID" placeholder="ID" required><br><br>
	Suggested Event Title<br>
    <input type="text" name="esTitle" placeholder="Title" required><br><br>
    Suggested Company<br>
    <input type="text" name="esCompany" placeholder="Company" required><br><br>
    <input type="submit" name="rsvp_submit" value="Delete"><br><br>
</form>
</div>
<h3>Suggested Event List:</h3>
</body>
</html>

<?php

require_once '../controller/View_ES.php';

// Create connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Query to pull data from DB
$sql = "SELECT eID, esTitle, esDesc, esCompany FROM eventsuggestion";
$result = $conn->query($sql);

//Check if data is present in table
if ($result->num_rows > 0) {

    //format table and add header
    echo "<table width='100%'>\n";
    echo '<tr>'."\n";
    echo "<th>Suggested Event ID</th>\n". "<th>Suggested Title</th>\n"."<th>Description</th>\n"."<th>Suggested Company</th>\n";

    // output data of each row
    while($row = $result->fetch_assoc()) {

       //Build Table for fetch_assoc data
        echo '<tr>'."\n";
        echo "<td>{$row['eID']}</td>\n" . "<td>{$row['esTitle']}</td>\n". "<td>{$row['esDesc']}</td>\n". "<td>{$row['esCompany']}</td>\n";
		echo '</tr>'."\n";
    }
} else {
    //Tell user that DB is empty
    echo "0 results";
}
$conn->close();
?>


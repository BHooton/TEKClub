<!DOCTYPE html>
<?php

//Add menu
require_once 'Menu.php';

//Block users who are not signed in
	session_start();
	if(!isset($_SESSION['UtahID'])){
    	header("Location: ../view/loginform.php");
		 exit();
	}
	if($_SESSION['role'] != 'admin'){
		header("Location: ../view/accessdenied.php");
	}
?>

<!--Import files for formatting-->
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../frontend/viewtable.css">
</head>

<body style="font-family: 'Montserrat', sans-serif;">

	<!--Jumbotron Header-->
	<section id="header" class="jumbotron text-center" style="font-family: 'Montserrat', sans-serif;">
        <h1 class="display-3">Submit Image Path</h1>
        <p class="lead">Document where an image was placed on the server</p>
        <a href="index.php" class="btn btn-primary">Home</a>
        <a href="officers.php" class="btn btn-success">Officers</a>
    </section>

<!--Form to submit img path-->
	<form style="text-align: center; font-family: 'Montserrat', sans-serif;" method="post" action="submitIMG.php">
		Image ID<br>
		<input type="text" name="imgID" placeholder="ID" required><br><br>
		Image Name<br>
		<input type="text" name="imgName" placeholder="Name" required><br><br>
		Image Path<br>
		<input type="text" name="imgPath" placeholder="Path" required><br><br>
		<input type="submit" name=rsvp_submit" value="Submit"><br>
	</form>
	<br>
	<br>

	<!--Header for img table pulled from the DB-->
	<h3 style="text-align: center; font-family: 'Montserrat', sans-serif;"> Image Paths:</h3>

</body>
</html>

<?php

//Add Banned users file
require_once '../controller/addIMGPath.php';

// Create connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Query to pull data from DB
$sql = "SELECT imgName, imgPath, imgID FROM imglocation";
$result = $conn->query($sql);

//Check if data is present in table
if ($result->num_rows > 0) {

    //format table and add header
    echo "<table width='100%'>\n";
    echo '<tr>'."\n";
    echo "<th>Image Name</th>\n". "<th>Image Path</th>\n"."<th>Image ID</th>\n";

    // output data of each row
    while($row = $result->fetch_assoc()) {

       //Build Table for fetch_assoc data
        echo '<tr>'."\n";
        echo "<td>{$row['imgName']}</td>\n" . "<td>{$row['imgPath']}</td>\n". "<td>{$row['imgID']}</td>\n";
        echo '</tr>'."\n";

    }
} else {
    //Tell user that DB is empty
    echo "0 results";
}
$conn->close();
?>
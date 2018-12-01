<?php

//This page allows the viewapplications.php page to pull information from the DB for display and editing.

//Create Connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
    if($conn->error){
        die("$conn->error");
    }


if (isset($_POST['UtahID'])) {

    require_once '../db/config.php';

    //Take in parameters
    $UtahID = $_POST['UtahID'];
    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];

    //Add data to DB
    $query = "DELETE FROM joinleadership WHERE UtahID='$UtahID';";
    $result = $conn->query($query);
    //Display error if query failed
    if (!$result) {
        die(
            "<div class='flash-message' style='position: relative;'>$conn->error</div>"
         );
        }
}
?>
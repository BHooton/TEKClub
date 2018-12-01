<?php

//Allows officers to delete messages from the DB and table

//Create Connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
    if($conn->error){
        die("$conn->error");
    }


if (isset($_POST['MessageID'])) {

    require_once '../db/config.php';

    //Take in parameters
    $MessageID = $_POST['MessageID'];

    //Add data to DB
    $query = "DELETE FROM contactform WHERE MessageID='$MessageID';";
    $result = $conn->query($query);
    //Display error if query failed
    if (!$result) {
        die(
            "<div class='flash-message' style='position: relative;'>$conn->error</div>"
         );
        }
}
?>
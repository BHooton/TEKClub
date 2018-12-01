<?php

//This page allows officers to view suggested events on the view_es.php page. It pulls informaion from the DB and allows for deletion.

//Create Connection
require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
    if($conn->error){
        die("$conn->error");
    }


if (isset($_POST['eID'])) {

    require_once '../db/config.php';

    //Take in parameters
    $eID = $_POST['eID'];
    $esTitle = $_POST['esTitle'];
    $esCompany = $_POST['esCompany'];

    //Add data to DB
    $query = "DELETE FROM eventsuggestion WHERE eID='$eID';";
    $result = $conn->query($query);
    //Display error if query failed
    if (!$result) {
        die(
            "<div class='flash-message' style='position: relative;'>$conn->error</div>"
         );
        }
}
?>
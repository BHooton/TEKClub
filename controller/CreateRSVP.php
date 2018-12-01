<?php

    //This page allows RSVP information to be compiled and added to the DB

    //Initial Check

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
        $Email = $_POST['Email'];
        $EventTitle = $_POST['EventTitle'];

        //Add data to DB
        $query = "INSERT into rsvp (UtahID, Email, EventTitle)
        values ('$UtahID', '$Email', '$EventTitle');";
        $result = $conn->query($query);
        //Display error if query failed
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
             );
            }
    }
?>
<?php

    //This allows db information regarding to officer roster to be displayed and edited

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
        $TeamPosition = $_POST['TeamPosition'];
        $CurrentYear = $_POST['CurrentYear'];
        $EmailAddress = $_POST['EmailAddress'];
        $CurrentCompany = $_POST['CurrentCompany'];
        $PositionatCompany = $_POST['PositionatCompany'];

        //Add data to DB
        $query = "INSERT into leadershipteam (UtahID, LastName, FirstName, TeamPosition, CurrentYear, EmailAddress, CurrentCompany, PositionatCompany)
        values ('$UtahID', '$LastName', '$FirstName', '$TeamPosition','$CurrentYear','$EmailAddress','$CurrentCompany','$PositionatCompany');";
        $result = $conn->query($query);
        //Display error if query failed
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
             );
            }
    }
?>
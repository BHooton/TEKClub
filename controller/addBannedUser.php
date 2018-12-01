<?php
    
    //This page allows officers to add banned users to DB and display the information in a table

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
        $Reason = $_POST['Reason'];

        //Add data to DB
        $query = "INSERT into userseliminated (UtahID, FirstName, LastName, Reason)
        values ('$UtahID', '$FirstName', '$LastName', '$Reason');";
        $result = $conn->query($query);
        //Display error if query failed
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
             );
            }
    }
?>
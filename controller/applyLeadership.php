<?php
    
    //This page takes applicaiton information and adds it to the DB

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
        $CurrentYear = $_POST['CurrentYear'];
        $EmailAddress = $_POST['EmailAddress'];
        $CurrentCompany = $_POST['CurrentCompany'];
        $PositionatCompany = $_POST['PositionatCompany'];
        $coverletter = $_POST['coverletter'];


        //Add data to DB
        $query = "INSERT into joinleadership (UtahID, LastName, FirstName, CurrentYear, EmailAddress, CurrentCompany, PositionatCompany, coverletter)
        values ('$UtahID', '$LastName', '$FirstName', '$CurrentYear','$EmailAddress','$CurrentCompany','$PositionatCompany','$coverletter');";
        $result = $conn->query($query);
        //Display error if query failed
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
             );
            }
    }
?>
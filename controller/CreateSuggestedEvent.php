<?php

    //This allows users to create suggested events on the suggestevent.php page

    //Create Connection
    require_once '../db/config.php';
    $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->error){
            die("$conn->error");
        }


    if (isset($_POST['esTitle'])) {

        require_once '../db/config.php';

        //Take in parameters
        $esTitle = $_POST['esTitle'];
        $esDesc = $_POST['esDesc'];
        $esCompany = $_POST['esCompany'];

        //Add data to DB
        $query = "INSERT into eventsuggestion(esTitle, esDesc, esCompany) values ('$esTitle', '$esDesc', '$esCompany');";
        $result = $conn->query($query);
        //Display error if query failed
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
             );
            }
    }
?>
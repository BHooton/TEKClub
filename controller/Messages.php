<?php

//Allows users to post messages to the DB. 

    //Create Connection
    require_once '../db/config.php';
    $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->error){
            die("$conn->error");
        }


    if (isset($_POST['email'])) {

        require_once '../db/config.php';

        //Take in parameters
        $FullName = $_POST['FullName'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
       
        //Add data to DB
        $query = "INSERT into contactform (FullName, email, comment)
        values ('$FullName', '$email', '$comment');";
        $result = $conn->query($query);
        //Display error if query failed
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
             );
            }
    }
?>
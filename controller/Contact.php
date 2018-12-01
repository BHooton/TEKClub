<?php

//This page takes contact and message information and adds it to the DB

//Open connection to DB
    require_once '../controller/Login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die($conn->connect_error);

    //Create Variables
    if(isset($_POST['name'])){
        $name = sanitizeMySQL($conn, $_POST['name']);
        $email = sanitizeMySQL($conn, $_POST['email']);
        $comment = sanitizeMySQL($conn, $_POST['comment']);

        '<br>';
        echo "Successful Submission";

        //Call add_comment function
        add_comment($conn, $name, $email, $comment);
    }   

    //Function to insert comment to DB
    function add_comment($conn, $name, $email, $comment){
        $query = "INSERT into contactform(name, email, comment) VALUES ('$name', '$email', '$comment');";
        $result = $conn->query($query);
            if(!$result) die($conn->error);
    }

    function sanitizeString($var){
        $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }

    function sanitizeMySQL($connection, $var){
        $var = sanitizeString($var);
        $var = $connection->real_escape_string($var);
        return $var;
    }   
?>
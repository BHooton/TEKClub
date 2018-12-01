<?php
    //This allows users to add image path information to DB and view its contents in a table

    //Create Connection
    require_once '../db/config.php';
    $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->error){
            die("$conn->error");
        }


    if (isset($_POST['imgID'])) {

        require_once '../db/config.php';

        //Take in parameters
        $imgID = $_POST['imgID'];
        $imgName = $_POST['imgName'];
        $imgPath = $_POST['imgPath'];

        //Add data to DB
        $query = "INSERT into imglocation (imgName, imgPath, imgID)
        values ('$imgName', '$imgPath', '$imgID');";
        $result = $conn->query($query);
        //Display error if query failed
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
             );
            }
    }
?>
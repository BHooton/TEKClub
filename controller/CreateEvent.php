<?php

//Allows an event to be created and added to the DB

//WIll take work. Just have path saved. Skip uploads

if (isset($_POST['EventID'])) {
    require_once '../model/model.php';

    $EventID = $_POST['EventID'];
    $EventTitle = $_POST['EventTitle'];
    $EventTime = $_POST['EventTime'];
    $EventDate = $_POST['EventDate'];
    
    $user = new Event($EventID, $EventTitle, $EventTime, $EventDate);
        $user->insert();
        $obj = new UserView();
        $tmp = $obj->select("EventID = '$EventID'");
}

?>
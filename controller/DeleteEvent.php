<?php

    //This allows events to be deleted from the DB

    //Initial Check Done
    //Call Classes
    require_once '../model/model.php';

    $obj = new EventView();

    $EventID = $_GET['EventID'];

    $obj->delete("`event`.`EventID` = " . $EventID);

        session_start();

        header("Location: ../view/profile.php?message=event deleted successfully.");

        exit();
?>
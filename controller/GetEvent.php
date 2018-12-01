<?php

//Pull event information from the DB

require_once '../model/model.php';

$obj = new EventView();
$event = $obj->selectAll();

session_start();

$_SESSION['event'] = $Event;

header("Location: ../view/calendar_final.php");
exit();
?>
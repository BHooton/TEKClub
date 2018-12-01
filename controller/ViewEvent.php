<?php

//references function page (QB.php) to pull event information from DB.

require_once '../model/model.php';

$obj = new EventView();

$EventID = $_GET['EventID'];
$Event = $obj->select("EventID = $EventID");

session_start();
$_SESSION['Event'] = $Event;
<?php

//This is the function page for most of the backend code. Informtion to pull and create data to the DB can be found in this file.

//Initial Check

require_once '../db/config.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->error) {
    die("<div class='flash-message'>$conn->error</div>");
}
class TekUser
{
    public $UtahID, $username, $LastName, $FirstName, $CurrentYear, $EmailAddress, $token, $CurrentCompany, $PositionatCompany, $role;
    public $roles = array();
    public function __construct($UtahID, $username, $LastName, $FirstName, $CurrentYear, $EmailAddress, $token, $CurrentCompany, $PositionatCompany, $role)
    {
        $this->UtahID = $UtahID;
        $this->username = $username;
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->CurrentYear = $CurrentYear;
        $this->EmailAddress = $EmailAddress;
        $this->token = $token;
        $this->CurrentCompany = $CurrentCompany;
        $this->PositionatCompany = $PositionatCompany;
        $this->role = $role;
    }
    public function insert()
    {
        global $conn;
        $UtahID = $this->UtahID;
        $username = $this->username;
        $LastName = $this->LastName;
        $FirstName = $this->FirstName;
        $CurrentYear = $this->CurrentYear;
        $EmailAddress = $this->EmailAddress;
        $token = $this->token;
        $CurrentCompany = $this->CurrentCompany;
        $PositionatCompany = $this->PositionatCompany;
        $role = $this->role;

        $query = "insert into users (UtahID, username, LastName, FirstName, CurrentYear, EmailAddress, token, CurrentCompany, PositionatCompany, role)
			values ('$UtahID', '$username','$LastName', '$FirstName', '$CurrentYear', '$EmailAddress', '$token', '$CurrentCompany', '$PositionatCompany','$role');";
        $result = $conn->query($query);

        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
            );
        }
    }

    function getRoles(){
        return $this->role;
    }
}
class Event
{
    public $EventID, $EventTitle, $EventTime, $EventDate;
    public function __construct($EventID, $EventTitle, $EventTime, $EventDate)
    {
        $this->EventID = $EventID;
        $this->EventTitle = $EventTitle;
        $this->EventTime = $EventTime;
        $this->EventDate = $EventDate;
    }
    public function insert()
    {
        global $conn;
        $EventID = $this->EventID;
        $EventTitle = $this->EventTitle;
        $EventTime = $this->EventTime;
        $EventDate = $this->EventDate;
        $query = "insert into events(EventID, EventTitle, EventTime, EventDate)
			values ('$EventID', '$EventTitle', '$EventTime', '$EventDate') ";
        $result = $conn->query($query);
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
            );
        }
    }
    public function select($where)
    {
        echo $where;
        global $conn;
        $query = "Select * from users where $where ";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
        $data = $result->fetch_assoc();
        return $data;
    }
}
class EventView
{
    public $events = array();
    public function selectAll()
    {
        global $events, $conn;
        $query = "Select * from events";
        $result = $conn->query($query);
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
            );
        }
        $rows = $result->num_rows;
        for ($j = 0; $j < $rows; $j++) {
            $result->data_seek($j);
            $row = $result->fetch_assoc();
            $event = new Event($row['EventID'], $row['EventTitle'], $row['EventTime'], $row['EventDate']);
            $events[] = $event;
        }
        return $events;
    }
    public function select($where)
    {
        global $conn;
        $query = "Select * from events where $where ";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
        $data = $result->fetch_assoc();
        return $data;
    }
    public function filter($where)
    {
        global $events, $conn;
        $query = "Select * from events where $where";
        $result = $conn->query($query);
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
            );
        }
        $rows = $result->num_rows;
        for ($j = 0; $j < $rows; $j++) {
            $result->data_seek($j);
            $row = $result->fetch_assoc();
            $event = new Event($row['EventID'], $row['EventTitle'], $row['EventTime'], $row['EventDate']);
            $events[] = $event;
        }
        return $events;
    }
    public function delete($where)
    {
        global $conn;
        $query = "delete from events where $where ";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
    }
    public function update($EventID, $EventTitle, $EventTime, $EventDate)
    {
        global $conn;
        $query = "UPDATE `events` SET `EventID` = '$EventID', `EventTitle` = '$EventTitle', `EventTime` = '$EventTime', `EventDate` = '$EventDate'";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
    }
}
class UserView
{
    public $users = array();
    public function select($where)
    {
        global $conn;
        $query = "Select * from users where $where ";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
        $data = $result->fetch_assoc();
        return $data;
    }
    public function delete($where)
    {
        global $conn;
        $query = "delete from users where $where";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
    }
    public function update($UtahID, $username, $LastName, $FirstName, $CurrentYear, $EmailAddress, $token, $CurrentCompany, $PositionatCompany)
    {
        global $conn;
        $query = "UPDATE `users` SET `UtahID` = '$UtahID','username' SET '$username', `LastName` = '$LastName', `FirstName` = '$FirstName', `CurrentYear` = '$CurrentYear', `EmailAddress` = '$EmailAddress','token' = '$token','CurrentCompany' = '$CurrentCompany','PositionatCompany'='$PositionatCompany' WHERE `users`.`UtahID` = $UtahID";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
    }
}
class ContactMessage{

    public $name, $email, $comment;
    public function select($where){
        global $conn;
        $query = "SELECT * FROM contactform where $where";
        $result = $conn->query($query);
        if (!result){
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
        $data = $result->fetch_assoc();
        return $data;
        }
    public function delete($where){
        global $conn;
        $query = "DELETE FROM contactform WHERE $where";
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
        }
    public function update($name, $email, $comment){
        global $conn;
        $query = "UPDATE 'contactform' SET 'name' = '$name', 'email' = '$email', 'comment' = '$comment'";
        $result = $conn->query($query);
        if (!$result) {
            die("<div class='flash-message' style='position: relative;'>$conn->error</div>");
        }
    }
}

function sanitizeString($var)
{
    global $conn;
    $var=strip_tags($var);
    $var=htmlentities($var);
    $var=stripslashes($var);
    return $conn->real_escape_string($var);
}

function sanitizeMySQL($conn, $var){
	$var = sanitizeString($var);
	$var = $conn->real_escape_string($var);
    return $var;
}

function destroySession()
{
    $_SESSION=array();

    if(session_id() != "" || isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}

?>
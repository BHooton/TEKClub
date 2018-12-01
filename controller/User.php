<?php

//This page assits with logging inot the website and pulling login information from the DB

require_once '../db/config.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

class User{
    public $username;
    public $roles = array();

    function __construct($username){
        global $conn;
        $this->username = $username;
        $query = "SELECT role from roles where username='$username'";

        $result = $conn->query($query);
        if(!$result) die($conn->error);

        $row_count = $result->num_rows;

        for($j=0; $j<$row_count; ++$j){
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQL_NUM);
            $role = $row[0];
            $this->roles[] = $role;
        }
    }
    function getRoles(){
        return $this->roles;
    }
}
?>
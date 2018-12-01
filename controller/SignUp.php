<?php

//This page allows users to sign up to be TEK Club members. Directing connects to signup.php

    //Initial Check
    if (isset($_POST['UtahID'])) {
        require_once '../model/model.php';

        $UtahID = sanitizeMySQL($conn, $_POST['UtahID']);
        $username = sanitizeMySQL($conn, $_POST['username']);
        $LastName = sanitizeMySQL($conn, $_POST['LastName']);
        $FirstName = sanitizeMySQL($conn, $_POST['FirstName']);
        $CurrentYear = sanitizeMySQL($conn, $_POST['CurrentYear']);
        $EmailAddress = sanitizeMySQL($conn, $_POST['EmailAddress']);
        $CurrentCompany = sanitizeMySQL($conn, $_POST['CurrentCompany']);
        $PositionatCompany = sanitizeMySQL($conn, $_POST['PositionatCompany']);
        $role = sanitizeMySQL($conn, $_POST['role']);

        // DB security. Hashes will be stored in DB. 
        $salt1 = 'qm&h*';
        $salt2 = 'pg!@';
        $pwd = sanitizeMySQL($conn, $_POST['pwd']);
        $token = hash('ripemd128', "$salt1$pwd$salt2");

        if($role = 'admin'){
            header("Location: ../view/accessdenied2.php");
        }

        $user = new TekUser($UtahID, $username, $LastName, $FirstName, $CurrentYear, $EmailAddress, $token, $CurrentCompany, $PositionatCompany, $role);
        $user->insert();
        $obj = new UserView();
        $tmp = $obj->select("UtahID = '$UtahID'");

        $UtahID = $tmp['UtahID'];
        session_start();
        $_SESSION['UtahID'] = $UtahID;
        $_SESSION['username'] = $username;
        $_SESSION['LastName'] = $LastName;
        $_SESSION['FirstName'] = $FirstName;
        $_SESSION['CurrentYear'] = $CurrentCompany;
        $_SESSION['EmailAddress'] = $EmailAddress;
        $_SESSION['token'] = $token;
        $_SESSION['CurrentCompany'] = $CurrentCompany;
        $_SESSION['PositionatCompany'] = $PositionatCompany;
        $_SESSION['role'] = $role;
    
    header("Location: ../view/loginform.php");
    exit();
    }
?>
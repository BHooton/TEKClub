<?php

    if(isset($_POST['UtahID'])){
        require_once '../model/model.php';
        
        session_start();

            if(isset($_POST['UtahID'])){
                $UtahID = sanitizeMySQL($conn, $_POST['UtahID']);
                $pwd1 = sanitizeMySQL($conn, $_POST['pwd1']);
                $NewUsername = sanitizeMySQL($conn, $_POST['username']);
                $pwd2 = sanitizeMySQL($conn, $_POST['pwd2']);

                $salt1 = 'qm&h*';
                $salt2 = 'pg!@';
                $token1 = hash('ripemd128', "$salt1$pwd1$salt2");
                $token2 = hash('ripemd128', "$salt1$pwd2$salt2");

                $obj = new UserView();
                $tmp = $obj->select("UtahID = '$UtahID'");

                $db_UtahID = $tmp['UtahID'];
                $db_LastName = $tmp['LastName'];
                $db_username = $tmp['username'];
                $db_FirstName = $tmp['FirstName'];
                $db_CurrentYear = $tmp['CurrentYear'];
                $db_EmailAddress = $tmp['EmailAddress'];
                $db_token = $tmp['token'];
                $db_CurrentCompany = $tmp['CurrentCompany'];
                $db_PositionatCompany = $tmp['PositionatCompany'];
                $db_role = $tmp['role'];

                if($token1 == $db_token){

                    global $conn;

                    $query = "UPDATE users SET username = '$NewUsername', token = '$token2' WHERE UtahID ='$UtahID';";
                    $result = $conn->query($query);
                    if(!$result){
                        die($conn-error);
                    }else{
                        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                    }
                }

            }
        }






            /*if(empty($_POST['pwd'])){
                $UtahID = $_SESSION['UtahID'];
                $LastName = $_POST['LastName'];
                $FirstName = $_POST['FirstName'];
                $username = $_POST['username'];
                $EmailAddress = $_POST['EmailAddress'];
                $CurrentYear = $_POST['CurrentYear'];
                $CurrentCompany = $_POST['CurrentCompany'];
                $PositionatCompany = $_POST['PositionatCompany'];
                $role = $_POST['role'];

                $obj = new UserView();
                $user = $obj->select("UtahID ='$UtahID'");
                $password = $user['pwd'];
                $obj->update($UtahID, $username, $LastName, $FirstName, $CurrentYear, $EmailAddress, $token, $CurrentCompany, $PositionatCompany);

                $_SESSION['']

            }*/
            /*
            $UtahID = $_SESSION['UtahID'];
            $username = sanitizeMySQL($conn, $_POST['username'];
            $LastName = sanitizeMySQL($conn, $_POST['last_name'];
            $FirstName = mysql_entities_fix_string($conn, $_POST['email']);
            $CurrentYear = sanitizeMySQL($conn, $_POST['phone'];
            $EmailAddress = sanitizeMySQL($conn, $_POST['institution_id'];
            $CurrentCompany = sanitizeMySQL($conn, $_POST['institution_id'];
            $PositionatCompany = sanitizeMySQL($conn, $_POST['institution_id'];
            $role = $_SESSION['user_id'];

            $salt1 = 'qm&h*';
            $salt2 = 'pg!@';
            $pwd = sanitizeMySQL($conn, $_POST['pwd']);
            $token = hash('ripemd128', "$salt1$pwd$salt2");

            $obj = new UsersModel();
            $obj->update($UtahID, $username, $LastName, $FirstName, $CurrentYear, $EmailAddress, $CurrentCompany,$PositionatCompany,$role);

            $_SESSION['username'] = $email;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['password'] = $password;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['institution_id'] = $institution_id;
            $_SESSION['phone'] = $phone;

            header("Location: ../views/profile.php?message=Successfully Updated");
            exit();
            }

        function mysql_entities_fix_string($conn, $string){
            return htmlentities(mysql_fix_string($conn, $string));	
        }
        function mysql_fix_string($conn, $string){
            if(get_magic_quotes_gpc()) $string = stripslashes($string);
            return $conn->real_escape_string($string);
        }*/
        ?>
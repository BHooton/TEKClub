<?php

require_once 'User.php';
$page_roles = array('admin');

session_start();

if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	$username = $user->username;
	$user_roles = $user->getRoles();	
    $password = $_SESSION['password'];
	
	$found=0;
	foreach($user_roles as $urole){
		foreach ($page_roles as $prole){
			if($urole == $prole) $found=1;
		}
    }
    
    
	
	if($found==1){
		echo "Welcome back $username with $pwd ";
	}else{
		header("Location: ../view/accessdenied.php");
		
   }
}

destroy_session_and_data();

function destroy_session_and_data(){
	$_SESSION = array();
	setcookie(session_name(), '', time()-2592000, '/');
	session_destroy();	
}


?>
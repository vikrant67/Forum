<?php

include 'connect.php';



// Show all errors except the notice ones
error_reporting(E_ALL ^ E_NOTICE);

// Initialize session
session_id();
session_start();
header('Cache-control: private'); // IE 6 FIX


	$post_user = $_POST['username'];
$post_password = $_POST['password'];
	if(empty($post_user)=== true || empty($post_password)=== true)
	{
		echo '<div id="notification_error">You need to enter a username and password</div>';
		exit();

	}

$result=mysql_query("SELECT username,password FROM acm_users WHERE `username`='$post_user' AND `password`='$post_password'");
while($row1 = mysql_fetch_array($result))
{
	$config=$row1['username'];
	$config1=$row1['password'];
} 

// check username and password

if($post_user == $config && $post_password == $config1)
{ 
// No error? Register the session & redirect the user to his/her 'Control Panel'
	
$_SESSION['username'] = $post_user;

	        echo 'OK'; // this response is checked in 'process-login.js'
	}
	else 
	{
    $auth_error = 'Username or password is incorrect';

    echo $auth_error;
	}

?>
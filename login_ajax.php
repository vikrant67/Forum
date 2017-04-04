<?php
include 'connect.php';
include_once 'func.php';
$msg="";
$errors="";



	$username=$_POST['form-username'];
	$password=$_POST['form-password'];

	if(empty($username)=== true || empty($password)=== true)
	{
		$errors[]='You need to enter a username and password';

	}
	else if (user_exists($username)=== false)
	{
		$errors[]='Your username doesnot exists';
	}
	
	else

	{
		if(strlen($password)> 32)
		{
			$errors[]='password too long';
		}
		$login = login($username, $password);
		
		if($login === false)
		{
			$errors[]='That username/password combination is incorrect';
			print_r($errors) ;
		}
		else
		{
			$_SESSION['form-username']=$username;
			$msg="You are successfully logged in";
			echo $msg;
			//header("location:myaccount.php");
			//exit();
			
		}
	}
	
	



?>
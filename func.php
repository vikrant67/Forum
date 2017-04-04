
<?php
require 'connect.php';

function logged_in_redirect()
{
	if(logged_in()=== true)
	{
		header('Location:private.php');
		exit();
	}
}
function logged_in()
{
	if(isset($_SESSION['username']))
	{
		return true;
	
	}
	else
		return false;


}
function array_sanitize($item)
{
	$item=mysql_real_escape_string($item);
}

function sanitize($data)
{
	return mysql_real_escape_string($data);
}
function output_errors($errors)
{
	return '<ul><li>'.implode('</li><li>',$errors).'</li></ul>';
}
function user_exists($username)
{
	$username=sanitize($username);
	
		$query = mysql_query("SELECT username FROM acm_users WHERE username='$username' ");
	
	if ( mysql_num_rows($query) != 0)
  {
      return true;
  }

  else
  {
    return false;
  }


}
//check this
function login($username, $password)
{
	$password=sanitize($password);
	
	$username=sanitize($username);
	$result=mysql_query("SELECT COUNT(`id`) FROM acm_users WHERE `username`='$username' AND `password`='$password'");
	if($result)
	{
	if ( mysql_num_rows($result) != 0)
  {
      return true;
  }

  else
  {
    return false;
  }

	}
 
}



?>
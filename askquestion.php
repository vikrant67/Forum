<?php
error_reporting(0);
include 'connect.php';
$err="";
$err1="";
$date1="";
if(function_exists('date_default_timezone_set'))
{
    date_default_timezone_set("Asia/Kolkata");
}

  $date1=date("F j, Y, g:i a");
$t=0;
if(isset($_POST['submit']))
{ 
	$required_fields=array('name','question');
	foreach ($_POST as $key => $value)
	 {
		if (empty($value) && in_array($key,$required_fields)===true)
		{
			$err[]='Some fields are missing';
			break 1;

		}
		
	}

}

?>

<?php




		if( isset($_POST['submit']) && empty($err) === true)
{
$name=""; 
$question="";



if( isset($_POST['name']))
{
   $name=$_POST['name']; 
}
if( isset($_POST['question']))
{
    $question=$_POST['question'];
}
$t=1;
$insert=mysql_query("INSERT INTO asked_question VALUES(NULL,'$name','$question','$date1')");



}





?>
<?php
include 'connect.php';
error_reporting(E_ALL ^ E_NOTICE);

// Initialize session
session_id();
session_start();
header('Cache-control: private'); // IE 6 FIX


$date1="";
$n="";
$id="";
$uss="";
$uss=$_SESSION['username'];
if (isset($_GET['id'])) {
    $id=($_GET['id']);
}
if(function_exists('date_default_timezone_set'))
{
    date_default_timezone_set("Asia/Kolkata");
}

  $date1=date("F j, Y, g:i a"); 

$answer="";
$result_name="SELECT name FROM acm_users WHERE username='$uss'";
$sql_name = mysql_query($result_name, $connection) or die(mysql_error());

while($row3 = mysql_fetch_array($sql_name))
{
    $name[]=$row3['name'];
} 
$n=$name[0];

if( isset($_POST['answer']))
{
    $answer=$_POST['answer'];
}


class Comment
{
	public $user="";
	public $com="";
	public $date="";
}

$e= new Comment();
$e->user=$n;
$e->com=$answer;
$e->date=$date1;


if($answer==NULL)
{
echo 'OK';
}
else
{
$insert=mysql_query("INSERT INTO answer VALUES(NULL,'$answer','$id','$n','$date1')");
echo json_encode($e);
}
?>


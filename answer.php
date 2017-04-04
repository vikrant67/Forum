


<?php
error_reporting(0);
include 'init.php';
$uss=$_SESSION['username'];
$n="";
 $date1="";
if (isset($_GET['id'])) {
    $id=($_GET['id']);
}

if(function_exists('date_default_timezone_set'))
{
    date_default_timezone_set("Asia/Kolkata");
}

  $date1=date("F j, Y, g:i a"); 
  if( $_POST['action'] === 'answer')
{

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



}
$p=0;
$a=1;
$q=0;
$result="SELECT answer FROM answer WHERE q_id='$id'";
$sql = mysql_query($result, $connection) or die(mysql_error());

$result1="SELECT question FROM question WHERE q_id='$id'";
$sql1 = mysql_query($result1, $connection) or die(mysql_error());
while($row1 = mysql_fetch_array($sql1))
{
	$final[]=$row1['question'];
} 
$result2="SELECT date1,posted_by FROM answer WHERE q_id='$id'";
$sql2 = mysql_query($result2, $connection) or die(mysql_error());
while($row2 = mysql_fetch_array($sql2))
{
	$post[]=$row2['posted_by'];
	$date2[]=$row2['date1'];
} 


?>



<?php

$var="";
$var1="";
$form="";


if(empty($_SESSION['username'])=== true)
{

	$var = <<<EOD

       <li><a class="page-scroll" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
   
EOD;
$v = <<<EOD
<div id="info"><i><b>
You must login to answer this question!
</b></i>
</div>
<br>
EOD;
}
else
{
	



$form= <<<EOD
<form role="form" class="ajax_answer" action="ajax_answer.php?id=$id" method="POST" id="formm">
  <div class="form-group" >
    <label id="label">Write Answer:</label>
   <textarea class="form-control" required="required" name="answer" rows="5"></textarea>
  </div>
   <input type="hidden" name="action"  value="answer">
  <button type="submit" id="formmm" class="btn btn-primary">Submit</button>
</form>
EOD;

$var = <<<EOD
<li><a class="btn btn-link-1"><span class="glyphicon glyphicon-user"></span>Welcome
EOD;


$var1= <<<EOD
</a></li>
      <li><a href='logout.php'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
EOD;

}

?>



<html>
<head>

<title><?php echo $final[0]; ?></title>





    
       

 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        

    
 <link rel="stylesheet" href="css/forum.css" type="text/css">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/modal.css" type="text/css">
<link rel="stylesheet" href="css/update.css" type="text/css">
     
 

</head>
   
<body>

            <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ACM-JUIT Forum</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
<li><a href="question.php"><span class="glyphicon glyphicon-pencil"></span>Ask Question</a></li>
<?php
echo $var;
echo " ";
if(empty($_SESSION['username'])=== false)
{
	 echo $_SESSION['username'];
}
echo $var1;

?>

      
    </ul>
  </div>
</nav>



<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
         

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
           <h2>Login</h2>
        </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" class="abc" action="do-login.php" method="post">
                    <div class="modal-body">
                      <br>
                <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
                <input id="login_username" class="form-control" type="text" name="username" placeholder="Username" required>
                <input id="login_password" class="form-control" type="password" name="password" placeholder="Password" required>
                            
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                  <div>
                                
                            </div>
                </div>
                    </form>
                  </div>
                </div>
                </div>
              </div>
<div class="margin">

</div>



       
        	<div class="col-sm-2">
        	</div>
<div class="container col-sm-8" >
<div class="panel panel-primary">
  <div class="panel-heading"><p id="question">
<?php
mysql_data_seek( $sql, 0 );
echo "Q";
echo $id;
echo ". ";
echo $final[0];
?>
</p></div>

  <div class="panel-body">
    
<?php
while($row = mysql_fetch_array($sql))
{
		?><p><b>Posted By:</b> <?php
echo $post[$q];

?></p><p><b>Dated:</b><?php
echo $date2[$q++];

?></p><?php
		echo $row['answer'];
		echo '<hr>';

	}
	


?>

  </div>



<div id="ajax_ans">

</div>
<?php

echo $form;
echo $v;
?>

</div>
</div>
<div class="col-sm-2">
        	</div>

        	
        






<script src="js/jquery.js"></script> 
 <script src="init.js"></script>
  <script src="ajax_answer.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>





</html>



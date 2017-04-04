<?php



include 'init.php';



$p=0;
$a=1;
$q=0;
$result="SELECT posted_by ,question.q_id as id, LEFT(answer, 190) as answer FROM question INNER JOIN answer ON question.q_id=answer.q_id";
$sql = mysql_query($result, $connection) or die(mysql_error());

$result1="SELECT question FROM question";
$sql1 = mysql_query($result1, $connection) or die(mysql_error());
while($row1 = mysql_fetch_array($sql1))
{
	$final[]=$row1['question'];
} 


?>
<?php
if(empty($_SESSION['username'])=== true)
{
	header("location:index.php");
exit();
}
?>
<html>
<head>
</head>
<title>Forum</title>


<link rel="stylesheet" href="forum.css" type="text/css">

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
       
   
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" href="css/forum.css" type="text/css">



   
<body>

            <nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ACM-JUIT Forum</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
    	  <li><a class="btn btn-link-1 launch-modal " href="#" data-modal-id="modal-login-aq"><span class="glyphicon glyphicon-pencil"></span>Ask a Question</a></li>
      <li><a class="btn btn-link-1 launch-modal "><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username']; ?> </a></li>
      <li><a href='logout.php' ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="modal fade" id="modal-login-aq" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label" id="log">Ask Question</h3>
        				<p>Write your question</p>
        			</div>
        			
        			<div class="modal-body"  >
        				
	                    <form role="form" action="index.php" method="post" class="login-form" id="contact-form">
	                    	<div class="form-feedback">
	                    	<?php
        					 if(empty($err)=== false && $_POST['action'] == 'register')
        					 {
        					 	echo $err1;
        					 }
        					 else if($t===1)
        					 {
        					 	echo "Thanks,Your question is posted. Once question is verified then it will be posted on forum";
        					 }
        					?>
        				</div>
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-username">Your name</label>
	                        	<input type="text" name="name" placeholder="Your name..." class="form-username form-control" id="form-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Your Question</label>
	                        	<textarea class="form-control"class="form-password form-control" id="form-password" rows="5" id="comment"name="question" placeholder="Question..."></textarea>
	                         <input type="hidden" name="action" value="register">

	                        </div>
	                        <button type="submit" name="submit-aq" class="btn">Post Question</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
           
 <div class="container" id="cont">
        	<div class="col-sm-2">
        	</div>
        <div class="container col-sm-8" id="box1">



<div class="panel panel-default">
  <div class="panel-heading"><p id="question">
<?php
mysql_data_seek( $sql, 0 );
echo $final[$q++];

?>
</p></div>
  <div class="panel-body">
    <p>Posted By: <?php
while($row = mysql_fetch_array($sql))
{
	
	if((int)$row['id']=== $a)
	{
		echo $row['posted_by'];
		echo '<br>';

	}
	
}
mysql_data_seek( $sql, 0 );

?></p>
<?php
while($row = mysql_fetch_array($sql))
{
	
	if((int)$row['id']=== $a)
	{
		echo $row['answer'];
		

	}
	
}


echo "<a href=\"answer.php?id=$a\">...See full answer</a>";

$a++;
?>
<br>
  </div>
</div>

<div class="col-sm-2">
        	</div>
        	</div>
<br>

    	<div class="col-sm-2">
        	</div>
        <div class="container col-sm-8" id="box1">



<div class="panel panel-default">
  <div class="panel-heading"><p id="question">
<?php
mysql_data_seek( $sql, 0 );
echo $final[$q++];

?>
</p></div>
  <div class="panel-body">
    <p>Posted By: <?php
while($row = mysql_fetch_array($sql))
{
	
	if((int)$row['id']=== $a)
	{
		echo $row['posted_by'];
		echo '<br>';

	}
	
}
mysql_data_seek( $sql, 0 );

?></p>
<?php
while($row = mysql_fetch_array($sql))
{
	
	if((int)$row['id']=== $a)
	{
		echo $row['answer'];
		echo '<br>';

	}
	
}
echo "<a href=\"answer.php?id=$a\">...See full answer</a>";

$a++;
?>
  </div>
</div>

<div class="col-sm-2">
        	</div>
        	</div>
<br>
    <div class="col-sm-2">
        	</div>
        <div class="container col-sm-8" id="box1">



<div class="panel panel-default">
  <div class="panel-heading"><p id="question">
<?php
mysql_data_seek( $sql, 0 );
echo $final[$q++];

?>
</p></div>
  <div class="panel-body">
    <p>Posted By: <?php
while($row = mysql_fetch_array($sql))
{
	
	if((int)$row['id']=== $a)
	{
		echo $row['posted_by'];
		echo '<br>';

	}
	
}
mysql_data_seek( $sql, 0 );

?></p>
<?php
while($row = mysql_fetch_array($sql))
{
	
	if((int)$row['id']=== $a)
	{
		echo $row['answer'];
		echo '<br>';

	}
	
}
echo "<a href=\"answer.php?id=$a\">...See full answer</a>";

$a++;
?>
  </div>
</div>

<div class="col-sm-2">
        	</div>
        	</div>
        	<br>




</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/log.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/scripts.js"></script>

</body>


</html>



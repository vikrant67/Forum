<?php

include 'askquestion.php';
$date1="";
if(function_exists('date_default_timezone_set'))
{
    date_default_timezone_set("Asia/Kolkata");
}

  $date1=date("F j, Y, g:i a");

?>




<html>
<head>

<title>Ask Question</title>

       


<script type="text/javascript">
$(document).ready(function(){
    
    $('[data-toggle="floatLabel"]').attr('data-value', $(this).val()).on('keyup change', function() {
		$(this).attr('data-value', $(this).val());
	});
});
</script>
      

  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>     

 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        

		
      
 <link rel="stylesheet" href="css/forum.css" type="text/css">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/modal.css" type="text/css">


		
      

</head>
   
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ACM-JUIT Forum</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      
      <li><a class="page-scroll" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
<?php

	if($t===1)
      {$v=<<<DOM
<div class="alert alert-success"><center>
DOM;
$v1=<<<DOM
</center></div>
DOM;
echo $v;
      echo 'Thanks,<b> '.$name.'</b> Your question has been sent. <i>Once its verified, it will be posted on FORUM.</i>';
      echo $v1;
  }
	?>
</div>

<div id="back">
<a href="index.php"><span class="glyphicon glyphicon-arrow-left"></span></a>
</div>
<div class="margin">

</div>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Ask your Question</h3>
			 			</div>
			 			<div class="panel-body">

			    		<form role="form" action="question.php" method="post">
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			                            <input type="text" name="name" id="first_name"  required="required" class="form-control input-sm" placeholder="Your Name"  data-value="no-js">
                                        
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<textarea type="text" rows="10" name="question" id="email" required="required" class="form-control input-sm" placeholder="Write your question here..."></textarea>
			    			</div>

			    			
			    			
			    			<input type="submit" name="submit" value="Ask" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>






<script src="init.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>

<?php
error_reporting(0);
session_start();
include('../detabase/admin_confi.php');


?>
<!doctype html>

<html>



<head>

	<title>Login or Sign Up</title>



	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" href="login_style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>



<body>



	<div class="container">

		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

			<div class="panel panel-info">

				<div class="panel-heading">

					<div class="panel-title">Sign In</div>

					<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>

				</div>



				<div style="padding-top:30px" class="panel-body">



					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>



					<form method="post" class="form-horizontal">



						<div style="margin-bottom: 25px" class="input-group">

							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

							<input id="login-username" type="text" class="form-control" name="email" placeholder="Email">

						</div>



						<div style="margin-bottom: 25px" class="input-group">

							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

							<input id="login-password" type="password" class="form-control" name="password" placeholder="password">

						</div>





						<div class="input-group">

							<div class="checkbox">

								<label>

									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me

                                </label>

							</div>

						</div>





						<div style="margin-top:10px" class="form-group">

							<!-- Button -->



							<div class="col-sm-8 col-sm-offset-2 controls">

								

								<button type="submit" class="loginBtn loginBtn--manual" name="login" style="text-align: center; padding: 0px;">Login</button>

								

							</div>

							

							<div class="col-sm-6 col-sm-offset-3 controls" style="margin-top: 17px;">

								<p style="text-align: center; font-size: 16px; margin-left: 6px;">OR</p>

							</div>

							

							<div class="col-sm-8 col-sm-offset-2 controls">



								<button class="loginBtn1 loginBtn loginBtn--facebook">Login with Facebook</button>

								

							</div>

							<div class="col-sm-8 col-sm-offset-2 controls">

								

								<button class="loginBtn1 loginBtn loginBtn--google">Login with Google</button>

								

							</div>

						</div>



						<div class="form-group">

							<div class="col-md-12 control" style="margin-top: 20px;">

								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">

									Don't have an account!

									<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()" id="here">Sign Up Here</a>

								</div>

							</div>

						</div>

					</form>

				</div>

			</div>

		</div>
        
        <?php
if(isset($_POST['login'])){
    $password=$_POST['password'];
    $email=$_POST['email'];
    $result=$mysqli->query("select * from singup_tbl where password='$password' and email_id='$email';");
    $fetch=mysqli_fetch_array($result);
    $count_rows=$result->num_rows;
      
       if ($count_rows == 1)
	    {
                $_SESSION['email_id']=$fetch['email_id'];
                $_SESSION['name']=$fetch['name'];
           //$row = $result->fetch_array();
          echo"<script>window.location.href='../index.php';</script>";
       } else {
           $msg = '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error&nbsp;!&nbsp;&nbsp;</strong>Wrong Email or Password.
</div>';
       }
    $mysqli->close();
}

?>
        


		<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

			<div class="panel panel-info">

				<div class="panel-heading">

					<div class="panel-title">Sign Up</div>

					<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>

				</div>

				<div class="panel-body">

					<form method="post" class="form-horizontal">



						<div id="signupalert" style="display:none" class="alert alert-danger">

							<p>Error:</p>

							<span></span>

						</div>
                        
                        <div class="form-group">

							<label for="firstname" class="col-md-3 control-label">Name</label>

							<div class="col-md-9">

								<input type="text" class="form-control" name="name" placeholder="Name" required>

							</div>

						</div>
                        
                           <div class="form-group">

							<label for="email" class="col-md-3 control-label">Email</label>

							<div class="col-md-9">

								<input type="email" class="form-control" name="email" placeholder="Email Address" required>

							</div>

						</div>



						<div class="form-group">

							<label for="phone number" class="col-md-3 control-label">Contact no:</label>

							<div class="col-md-9">

								<input type="text" class="form-control" name="contact" placeholder="Enter phone number" required>

							</div>

						</div>

						<div class="form-group">

							<label for="password" class="col-md-3 control-label">Password</label>

							<div class="col-md-9">

								<input type="password" class="form-control" name="password" placeholder="password" required>

							</div>

						</div>

						<div class="col-md-offset-3 col-md-9">

							<button name="submit" type="submit" class="btn btn-primary"><i class="icon-hand-right"></i>Sign Up</button>

						</div>



					</form>

				</div>

			</div>

		</div>

	</div>
    
    
<?php
 if(isset($_POST['submit'])) {
	 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $password=$_POST['password'];
  //$date=date("dd:mm:yy");
//$status="0";

 $sql="INSERT INTO `singup_tbl` (`id`, `name`, `email_id`, `contact_number`, `password`) VALUES (NULL, '$name', '$email', '$contact', '$password')";
 
  if ($mysqli->query($sql) === TRUE)
  {
 echo "<script>alert('Successfully!');</script>";
}
 else{
 echo mysqli_error();
 echo "<script>alert('Something Went Wrong.Try Again..!!!!');</script>";
	}
    } 

?>


</body>



</html>


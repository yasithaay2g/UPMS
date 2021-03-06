<?php require_once('inc/connection1.php');
?>

<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--===============================================================================================-->
</head>
<body >
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-20 p-r-20 p-t-250" method="post" action="sign.php">
					<?php include('errors.php'); ?>
					<span class="login100-form-title">
							<img src="img/upms.png" width="90" height="47" alt=""><br>
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="fname" placeholder="Enter First Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Last Name">
						<input class="input100" type="text" name="lname" placeholder="Enter Last Name">
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input" data-validate = "Enter University">
						<input class="input100" type="text" name="university" placeholder="Enter University Name">
						<span class="focus-input100"></span>
					</div><br>


					<div class="wrap-input100 validate-input" data-validate = "Please Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div><br>


					<div class="wrap-input100 validate-input" data-validate = " Enter password">
						<input class="input100" type="password" name="pass1" placeholder=" Password">
						<span class="focus-input100"></span>
					</div><br>


					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass2" placeholder="Confrim Password">
						<span class="focus-input100"></span>
					</div> 

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<p>
			Already a member? <a href="editlog.php">Sign in</a>
		</p>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="resubmit" class="login100-form-btn">
							Submit
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
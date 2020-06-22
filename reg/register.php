<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="styleee.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark justify-content-between fixed-top py-3 " style="background-color:#1B2631 ;"  >
		<a class="navbar-brand" href="index.php">
        <img src="../img/upms.png" width="90" height="57" alt="">
      </a>
		<a href="" class="navbar-brand"><B><div class="page-header">
        <h4>Register</h4> 
      </div>
</B></a>


		  <button class="navbar-toggler" data-toggle="collapse" data-target="#yg"><span class="navbar-toggler-icon"></span></button>

		  <div class="collapse navbar-collapse justify-content-end" id="yg">
        
        	<ul class="navbar-nav">
			     <li class="nav-item active"><a href="../index.php" class="nav-link">HOME</a></li>
			
            	  <li class="nav-item"><a  href="login.php" class="nav-link">LOGIN</a>

             </li>
          </ul>

    </div>
      </nav>



	<div class="bg2">
	<div class="reg">
		
		

	
	
	<center><form method="post" action="register.php">
		<span class="login100-form-title">
						<img src="../img/upms.png" width="90" height="42" alt=""><br>
						Register
					</span>
		<?php include('errors.php'); ?>
		

		<div class="input-group">
			
			<input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name">
		</div>
		<div class="input-group">
		
			<input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name">
		</div>
		<div class="input-group">
			
			<input type="text" name="universityy" value="<?php echo $university; ?>" placeholder="University">
		</div>
		<div class="input-group">
			
			<input type="email" name="email" value="<?php echo $email; ?>"placeholder="Email">
		</div>
		<div class="input-group">
			
			<input type="password" name="pass1"placeholder="Password">
		</div>
		<div class="input-group">
			
			<input type="password" name="pass2"placeholder="Confirm Password">
		</div>
		<div class="input-group">
			
			
				<center><button type="submit" class="bun3"  name="reg_user" >Register</button></center>
		</div>
		
		<p>
			Already a member? <a href="login.php"><b>Sign in</b></a>
		</p>
	</form></center></div></div>
</body>
</html>
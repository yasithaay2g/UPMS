<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="styleee.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark justify-content-between fixed-top py-3 " style="background-color:#1B2631 ;"  >
		<a class="navbar-brand" href="index.php">
        <img src="../img/upms.png" width="90" height="57" alt="">
      </a>
		<a href="" class="navbar-brand"><B><div class="page-header">
        <h4>Login</h4> 
      </div>
</B></a>


		  <button class="navbar-toggler" data-toggle="collapse" data-target="#yg"><span class="navbar-toggler-icon"></span></button>

		  <div class="collapse navbar-collapse justify-content-end" id="yg">
        
        	<ul class="navbar-nav">
			     <li class="nav-item active"><a href="../index.php" class="nav-link">HOME</a></li>
			
            	  <li class="nav-item"><a  href="register.php" class="nav-link">REGISTER </a>

             </li>
          </ul>

    </div>
      </nav>



	<div class="bg">
	<div class="header">
		
	
	
	<center><form method="post" action="login.php">
		<span class="login100-form-title">
						<img src="../img/upms.png" width="90" height="42" alt=""><br>
						Login
					</span>
		<?php include('errors.php'); ?>
		

		<div class="input-group">
			
			<i class="fa fa-user-o  " style="font-size:22px"></i>&nbsp;&nbsp;  <input type="text" name="eemail" placeholder="Email" >
		</div>
		<div class="input-group">
		
			<i class="fa fa-key" style="font-size:22px"></i>&nbsp;<input type="password" name="ppassword" placeholder=" Password">
		</div>
		<div class="input-group">
			
			
				&nbsp;&nbsp;<button type="submit" class="bun3"  name="login_user" >Sign in</button>
		</div>
		<p>
			Don’t have an account?
			<a href="register.php"><b> Sign up now</b></a>
		</p>
	</form></center>
</div>
</div>

</body>
</html>
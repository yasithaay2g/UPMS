<?php 
	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/back.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styleee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


 

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="startbootstrap-creative-master/css/creative.min.css" rel="stylesheet">


	
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-dark justify-content-between fixed-top py-3" style="background-color:#1B2631  ;"  >
		 <a class="navbar-brand" href="index.php">
        <img src="img/upms.png" width="90" height="57" alt="">
      <a class="navbar-brand" href="index.php">
        <img src="../img/upms.png" width="90" height="57" alt="">
      </a>	<a href="" class="navbar-brand"><B><div class="page-header">
        <h4>Upload & Download </h4> 
      </div>
</B></a>

		  <button class="navbar-toggler" data-toggle="collapse" data-target="#yg"><span class="navbar-toggler-icon"></span></button>

		  <div class="collapse navbar-collapse justify-content-end" id="yg">
        
        	<ul class="navbar-nav">
			     <li class="nav-item active"><a href="../index.php" class="nav-link">HOME</a></li>
			    
         

          </ul>         
			    
<div >
           
<?php  if (isset($_SESSION['email'])): ?>
	<B style="color:#fff;">Welcome <i><u><?php echo $_SESSION['email']." ! "; ?></u></i></B>
	
			 <a href="index.php?logout='1'" style="color: red;"> <br><i class="fa fa-sign-out" style="font-size:16px"></i>&nbsp;Logout</a>
		<?php endif ?></div>
		 		  
        
      </nav>

      	<div class="bg3">
     	<div class="headerr">
     		<div class="hhh"><h2>Select Action</h2></div>
		
	<div class="content">

			<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>



		<div class="row1">

			<a href="../up.php"><button type="text" class="bun1"  name="btnSubmit" ><i class="fa fa-upload" style="font-size:16px"></i>&nbsp;&nbsp;Upload</button></a>
		</div><br>

		<div class="row2"><a href="../down.php"><button type="text" class="bun2"  name="btnSubmit" ><i class="fa fa-download" style="font-size:16px"></i>&nbsp;&nbsp;Download & Filter</button></a></div>
	</div>
</div>
</div>
		
</body>
</html>
<?php require_once('inc/connection.php');?>
<?php 
	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: reg/login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location:  reg/login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upms Upload</title>
		
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/up.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


			




	
	</header>

	<body>



		<nav class="navbar navbar-expand-lg navbar-dark justify-content-between fixed-top py-3" style="background-color:#1B2631     ;"  >
		 <a class="navbar-brand" href="index.php">
        <img src="img/upms.png" width="90" height="47" alt="">
      </a>
		<a href="" class="navbar-brand"><B><div class="page-header">
        <h4>Upload  Paper</h4> 
      </div>
</B></a>


		  <button class="navbar-toggler" data-toggle="collapse" data-target="#yg"><span class="navbar-toggler-icon"></span></button>

		  <div class="collapse navbar-collapse justify-content-end" id="yg">
        
        	<ul class="navbar-nav">
			     <li class="nav-item "><a href="index.php" class="nav-link">HOME</a></li>
		
             	<li class="nav-item"><a href="down.php" class="nav-link js-scroll-trigger">DOWNLOAD & FILTER</a></li>

			    
         
           
          </ul>


<div class="lo">
           
<?php  if (isset($_SESSION['email'])): ?>
	<B style="color:#fff;">Welcome <i><u><?php echo $_SESSION['email']." ! "; ?></u></i></B>

			 <a href="reg/index.php?logout='1'" style="color: red;"> <br><i class="fa fa-sign-out" style="font-size:16px"></i>&nbsp;Logout</a>
		<?php endif ?></div>

    </div>
      </nav>
		<div class="bg">
		<div class="form-area">			
			

			<div class="panel panel-default">



	<div class="content">

	

				<div class="panel-body ">

					<script language='JavaScript' type='text/javascript'>
    					function validateThisFrom(thisForm) {
        					if (thisForm.university.value == "") {
           					 alert("Please select University");
           						 thisForm.university.focus();
            						return false;
        					
        					}if (thisForm.level.value == "") {
           					alert("Please select Level");
            					thisForm.level.focus();
            					return false;

        					}if (thisForm.year.value == "") {
            					alert("Please select Year");
            					thisForm.year.focus();
            					return false;

        					}if (thisForm.semester.value == "") {
            					alert("Please select Semester");
            					thisForm.semester.focus();
            					return false;

        					}if (thisForm.subject.value == "") {
            					alert("Please select Subject");
            					thisForm.subject.focus();
            					return false;
        					}
    					}

					</script>

					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="upload.php" onSubmit="return validateThisFrom (this);">

						<div class="form-group">
						<label for="">Select University :<br></label>
						<select class="btn btn-primary btn-sm required " name="university">
				  			<option  value="">---University---</option>
                  			<option value="MORATUWA">MORATUWA</option>
                  			<option value="SABARAGAMUWA">SABARAGAMUWA</option>
                  			<option value="RUHUNA">RUHUNA</option>
                  			<option value="PERADENIYA">PERADENIYA</option>
                		</select><br>

						<label for="">Select Level :<br></label>
						<select class="btn btn-secondary btn-sm" name="level">
  							<option value="">---Level---</option>
  							<option value="Level 1">Level 1</option>
  							<option value="Level 2">Level 2</option>
  							<option value="Level 3">Level 3</option>
  							<option value="Level 4">Level 4</option>
						</select><br>
		    

		    			<label for="">Select Year :<br></label>
		    			<select class="btn btn-info btn-sm" name="year">
  							<option value="">---Year---</option>
  							<option value="2018">2018</option>
  							<option value="2017">2017</option>
  							<option value="2016">2016</option>
  							<option value="2016">2015</option>
						</select><br>
		

						<label for="">Select Semester :<br></label>
						<select class="btn btn-danger btn-sm" name="semester">

  							<option value="">---Semester---</option>
  							<option value="Semester 1">Semester 1</option>
  							<option value="Semester 2">Semester 2</option>
  						</select><br><br>

						<label for="">Select Subject :<br></label>
						<select class="btn btn-outline-warning btn-sm" name="subject">
  							<option value="">---Subject---</option>
  							<option value="com">Computer Science</option>
  							<option value="mat">Mathematis</option>
  							<option value="phy">Physics</option>
  							<option value="che">Chemistry</option>

						</select>
					</div>

						<div class="form-group">
							<label for="exampleInputFile">Select files to upload:</label>
							<input class="btn btn-dark  btn-sm" type="file" id="exampleInputFile" name="files[]" multiple="multiple">

							<p class="help-block">
							<span class="badge badge-warning">Note</span>
							Please, Select the only images docx & pdf (.jpg, .pdf, .docx) to upload with the size of 4MB only.
							</p>
						</div>
						<br>


						<center><button type="submit" class="bun"  name="btnSubmit" ><i class="fa fa-upload" style="font-size:18px"></i>&nbsp;&nbsp;Start Upload</button></center>
									
		
					</form>

					<br>
						<label for="Progressbar">Progress:</label>
				<div class="progress bg-secondary text-white" id="Progressbar"> 

						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="divProgressBar">
							<span class="sr-only">45% Complete</span>
						</div>	

					   
					</div>
					   <div id="status">
					   	
						</div>
				</div>
			</div>


		</div>

	</div>
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#uploadForm").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>

		

	</body>


</html>
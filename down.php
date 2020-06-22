<?php require_once('inc/connection1.php');
?>
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

		<title>file filter</title>
		 
  
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		
  			
  		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/filter.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	</header>

  		<body>	<nav class="navbar navbar-expand-lg navbar-dark justify-content-between fixed-top py-3 " style="background-color:#1B2631 ;"  >
		<a class="navbar-brand" href="index.php">
        <img src="img/upms.png" width="90" height="47" alt="">
      </a>
		<a href="" class="navbar-brand"><B><div class="page-header">
        <h4>Download & Filter</h4> 
      </div>
</B></a>


		  <button class="navbar-toggler" data-toggle="collapse" data-target="#yg"><span class="navbar-toggler-icon"></span></button>

		  <div class="collapse navbar-collapse justify-content-end" id="yg">
        
        	<ul class="navbar-nav">
			     <li class="nav-item "><a href="index.php" class="nav-link">HOME</a></li>
          		<li class="nav-item"><a href="up.php" class="nav-link js-scroll-trigger">UPLOAD</a></li>
          </ul>
          <div class="lo">
           
<?php  if (isset($_SESSION['email'])): ?>
	<B style="color:#fff;">Welcome <i><u><?php echo $_SESSION['email']." ! "; ?></u></i></B>

			 <a href="reg/index.php?logout='1'" style="color: red;"> <br><i class="fa fa-sign-out" style="font-size:16px"></i>&nbsp;Logout</a>
		<?php endif ?></div>

    </div>
      </nav>
  			<div class="bb">
  		
  			<div class=" container form-area">
  				<div class="page-header ">
  				<h3 align=center></h3>
  			</div>
  			<div class=" panel-default">
  			
  			
  				<form method="post"   action="down.php" >

  						<div class="panel-body">
						<label for="" class="control-label">Select University :<br></label>
						<select class="btn btn-primary btn-sm required " name="university" >
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
		    			<select class="btn btn-primary btn-sm" name="year">
  							<option value="">---Year---</option>
  							<option value="2018">2018</option>
  							<option value="2017">2017</option>
  							<option value="2016">2016</option>
  							<option value="2016">2015</option>
						</select><br>
		

						<label for="">Select Semester :<br></label>
						<select class="btn btn-secondary btn-sm" name="semester">

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

					<div class="row">

					<button type="submit" class="bun1"  name="submit" ><i class="fa fa-search" style="font-size:16px"></i>&nbsp;&nbsp;Filter</button><br><br>
					<button type="submit" class="bun"  name="sub" > <i class="fa fa-file-text-o" style="font-size:16px"></i>&nbsp;&nbsp;View All Paper</button>
				</div>
									
  			</form><br>
  		</div>


  			<div class="table-responsive ">
  				<table class="table table-striped table-hover">
  					<thead>
  						<tr>
  							
  							<th>University</th>
  							<th>Level</th>
  							<th>Year</th>
  							<th>Semester</th>
  							<th>Subject</th>
  							<th>File Name</th>
  							<th>Action</th>
  						</tr>
  					</thead>
  				
  				<tbody>
  					<?php 
  						if (isset($_POST['submit'])) {

  							 $university=$_POST['university'];
							 $level=$_POST['level'];
							 $year=$_POST['year'];
							 $semester=$_POST['semester'];
							 $subject=$_POST['subject'];
							 	// select need pass paper 
							 if ( $university !="" && $level !="" && $year !="" && $semester !="" && $subject !="") {

							 	$query="SELECT * 
							 			FROM uploadf 
							 			WHERE  university = '$university' 
							 			AND level = '$level'
							 			AND year ='$year'
							 			AND semester ='$semester' 
							 			AND subject ='$subject'

							 			";

							 	$data= mysqli_query($db,$query) or die ('error');
							 	if (mysqli_num_rows($data)> 0){

							 		while ($row = mysqli_fetch_assoc($data)) {
							 			$file_id = $row['file_id'];
							 			$university = $row['university'];
							 			$level = $row['level'];
							 			$year = $row['year'];
							 			$semester = $row['semester'];
							 			$subject = $row['subject'];
							 			$file_name = $row['file_name'];

							 		?>
							 		<tr>
							 			
							 			<td><?php echo $university;  ?></td>
							 			<td><?php echo $level;  ?></td>
							 			<td><?php echo $year;  ?></td>
							 			<td><?php echo $semester;  ?></td>
							 			<td><?php echo $subject;  ?></td>
							 			<td><?php echo $file_name;  ?></td>

							 			<td >
							 				<a href="download.php?id=<?php echo $row['file_id']?>" class="btn btn-primary btn-sm"><i class="fa fa-download" style="font-size:14px"></i>&nbsp;Download</a>
							 			</td>

							 		</tr>

							 		<?php

							 	}

							 }else{
							 	?>
							 	<tr>
							 		<td colspan="6"><center><B><font color="red">------ Records Not Found !!! ------</font></B></center></td>
							 	</tr>

							 	
							 	<?php
							 } 
 									// select pass paper catrgoey ex:2017,moratuwa
							 }else if( $university !="" || $level !="" || $year !="" || $semester !="" || $subject !=""){

							 	$query="SELECT * 
							 			FROM uploadf 
							 			WHERE  university = '$university' 
							 			or level = '$level'
							 			or year ='$year'
							 			or semester ='$semester' 
							 			or subject ='$subject'

							 			";

							 	$data= mysqli_query($db,$query) or die ('error');
							 	if (mysqli_num_rows($data)> 0){

							 		while ($row = mysqli_fetch_assoc($data)) {
							 			$file_id = $row['file_id'];
							 			$university = $row['university'];
							 			$level = $row['level'];
							 			$year = $row['year'];
							 			$semester = $row['semester'];
							 			$subject = $row['subject'];
							 			$file_name = $row['file_name'];

							 		?>
							 		<tr>
							 			
							 			<td><?php echo $university;  ?></td>
							 			<td><?php echo $level;  ?></td>
							 			<td><?php echo $year;  ?></td>
							 			<td><?php echo $semester;  ?></td>
							 			<td><?php echo $subject;  ?></td>
							 			<td><?php echo $file_name;  ?></td>

							 			<td >
							 				<a href="download.php?id=<?php echo $row['file_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-download" style="font-size:14px"></i>&nbsp;Download</a>
							 			</td>

							 		</tr>

							 		<?php

							 	}

							 }else{
							 	?>
							 	<tr>
							 		<td colspan="6"><center><B><font color="red">------ Records Not Found !!! ------</font></B></center></td>
							 	</tr>

							 	
							 	<?php
							 } 







							 }



  						}elseif (isset($_POST['sub'])) {

  							 $university=$_POST['university'];
							 $level=$_POST['level'];
							 $year=$_POST['year'];
							 $semester=$_POST['semester'];
							 $subject=$_POST['subject'];

							 if ( $university =="" && $level =="" && $year =="" && $semester =="" && $subject =="") {

							 	$query="SELECT * 
							 			FROM uploadf 
							 			

							 			";

							 	$data= mysqli_query($db,$query) or die ('error');
							 	if (mysqli_num_rows($data)> 0){

							 		while ($row = mysqli_fetch_assoc($data)) {
							 			$file_id = $row['file_id'];
							 			$university = $row['university'];
							 			$level = $row['level'];
							 			$year = $row['year'];
							 			$semester = $row['semester'];
							 			$subject = $row['subject'];
							 			$file_name = $row['file_name'];

							 		?>
							 		<tr>
							 			
							 			<td><?php echo $university;  ?></td>
							 			<td><?php echo $level;  ?></td>
							 			<td><?php echo $year;  ?></td>
							 			<td><?php echo $semester;  ?></td>
							 			<td><?php echo $subject;  ?></td>
							 			<td><?php echo $file_name;  ?></td>

							 			<td >
							 				<a href="download.php?id=<?php echo $row['file_id']?>" class="btn btn-primary btn-sm"><i class="fa fa-download" style="font-size:14px"></i>&nbsp;Download</a>
							 			</td>

							 		</tr>

							 		<?php

							 	}

							 }else{
							 	?>
							 	<tr>
							 		<td colspan="6"><center><B><font color="red">------ Records Not Found !!! ------</font></B></center></td>
							 	</tr>

							 	
							 	<?php
							 } 

							}


  							

  						}

  					?>
  				</tbody>
  			</table>
  		</div>

  		</div>
  	

		</div>
  	</body>

  </html>

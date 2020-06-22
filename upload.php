<?php require_once('inc/connection.php');?>

<?php
	if(isset($_POST["btnSubmit"])){		
		$errors = array();

		$university=$_POST['university'];
		$level=$_POST['level'];
		$year=$_POST['year'];
		$semester=$_POST['semester'];
		$subject=$_POST['subject'];



		
		$extension = array("jpeg","jpg","pdf","docx");
		
		$bytes = 1024;
		$allowedKB = 4096;
		$totalBytes = $allowedKB * $bytes;
		
		if(isset($_FILES["files"])==false)
		{
			echo "<b>Please, Select the files to upload!!!</b>";
			return;
		}
		
		$db = mysqli_connect("localhost","root","","upmsnew");	
		
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			$uploadThisFile = true;
			
			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "<b>File type is invalid. Name:- </b>".$file_name);
				$uploadThisFile = false;
			}				
			
			if($_FILES["files"]["size"][$key] > $totalBytes){
				array_push($errors, "<b>File size must be less than 4MB. Name:- </b>".$file_name);
				$uploadThisFile = false;
			}
			
			if(file_exists("Upload/".$_FILES["files"]["name"][$key]))
			{
				array_push($errors, "<b>File is already exist. Name:- </b>". $file_name);
				$uploadThisFile = false;
			}
			
			if($uploadThisFile){
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$ext;				
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
				
				$query = "INSERT INTO uploadf(university,level,year,semester,subject,file_name) VALUES('$university','$level','$year','$semester','$subject','".$newFileName."')";
				
				mysqli_query($db, $query);			
			}
		}
		
		mysqli_close($db);
		
		$count = count($errors);
		
		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}		
	}
?>
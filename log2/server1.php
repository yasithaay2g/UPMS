<?php require_once('inc/connection1.php');
?>

<?php 
	

	// variable declaration
	$fname = "";
	$lname = "";
	$university = "";
	$email    = "";
	$errors = array(); 
	

	

	// REGISTER USER
	if (isset($_POST['resubmit'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$university = mysqli_real_escape_string($db, $_POST['university']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
		$pass2 = mysqli_real_escape_string($db, $_POST['pass2']);

		// form validation: ensure that the form is correctly filled
		if (empty($fname)) { array_push($errors, "First name is required"); }
		if (empty($lname)) { array_push($errors, "Last name is required"); }
		if (empty($university)) { array_push($errors, "University is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($pass1)) { array_push($errors, "Password is required"); }

		if ($pass1 != $pass2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($pass1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (fname,lname,university, email, password) 
					  VALUES('$fname','$lname' ,'$university','$email', '$password')";
			mysqli_query($db, $query);

			header('location: indexx.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['submit'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE fname='$fname' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				
				header('location: indexx.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
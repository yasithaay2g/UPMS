<?php 
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	$university = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'upmsnew');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$university = mysqli_real_escape_string($db, $_POST['universityy']);
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

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";


			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {

		$email = mysqli_real_escape_string($db, $_POST['eemail']);
		$password = mysqli_real_escape_string($db, $_POST['ppassword']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";


				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
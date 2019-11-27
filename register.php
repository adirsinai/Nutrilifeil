<?php
        include "class_user_mngr.php";
        $user_mngr = new user_mngr();
        $errors=array();
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = (isset($_POST['username']))? $_POST['username'] : '';
      		$fname = (isset($_POST['fname']))? $_POST['fname'] : '';
       		$lname = (isset($_POST['lname']))? $_POST['lname'] : '';
		$email = (isset($_POST['email']))? $_POST['email'] : '';
		$Licensenumber = (isset($_POST['Licensenumber']))? $_POST['Licensenumber'] : '';
		$password_1 = (isset($_POST['password_1']))? $_POST['password_1'] : '';
		$password_2 = (isset($_POST['password_2']))? $_POST['password_2'] : '';

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($fname)) { array_push($errors, "FirstName is required"); }
		if (empty($lname)) { array_push($errors, "LastName is required"); }                
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($Licensenumber)) { array_push($errors, "Licensenumber is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password=$user_mngr->enc_pass($password_1);
	//encrypt the password before saving in the database
                     
        $UID = $user_mngr->add_user($username, $fname, $lname, $email, $Licensenumber, $password);
        
        $user_mngr->LogMeIn($username, $fname, $lname, $UID);
        header("location:index.php");
    }
		

	}
        ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<center><h2>Nutrilife</h2></center>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="">


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="">
		</div>
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="fname" value="">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lname" value="">
		</div>            
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="">
		</div>
			<div class="input-group">
			<label>License number</label>
			<input type="Licensenumber" name="Licensenumber" value="">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
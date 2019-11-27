<?php

        include "class_user_mngr.php";
        $user_mngr = new user_mngr();
        $errors=array();

	// LOGIN USER

            if (isset($_POST['login_user'])) {
		$username = (isset($_POST['username']))? $_POST['username'] : '';
		$password = (isset($_POST['password']))? $_POST['password'] : '';
                // sql injection
                $username = addslashes($username);
                $password = addslashes($password);
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
                        
		}
                
		if (count($errors) == 0) {
        
			$doEnter = $user_mngr->should_I_Log($username, $password);
  
			if ($doEnter ) {
                            $UID = $doEnter['id'];
                            $fname = $doEnter['fname'];
                            $lname = $doEnter['lname'];
                            
                                $user_mngr->LogMeIn($username, $fname, $lname, $UID);

			}else {
 
				array_push($errors, "Wrong username/password combination");
			}
                        if($_SESSION['chack']>=5){
                            Echo "You Are Blocked!";
                        }
                         
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
		<h2>Login</h2>
	</div>
	
	<form method="post" action="">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>
<?php
session_start();
class user_mngr{
    
private $salt="rrr";
public $mysqli;

            function __construct(){
                
		$this->mysqli= mysqli_connect('localhost', 'adirsinai_adirdb', 'gPdl619fWC', 'adirsinai_adirdb');
	}
	function enc_pass($password){
		return md5($this->salt.$password);
	}
	function add_user($username, $fname, $lname, $email, $Licensenumber, $password){  
            
			$query = "INSERT INTO users (username, fname, lname, email, Licensenumber, password) 
					  VALUES('$username', '$fname', '$lname', '$email', '$Licensenumber', '$password')";
			mysqli_query($this->mysqli, $query);
                        
                        $UID = mysqli_insert_id($this->mysqli);
                        return $UID;
        }
        function LogMeIn($username, $fname, $lname, $UID){
                        
            	        $_SESSION['username'] = $username;
                        $_SESSION['fname'] = $fname;
                        $_SESSION['lname'] = $lname;
                        $_SESSION['UID'] = $UID;
			$_SESSION['success'] = "You are now logged in";
			header("location:index.php");
            
        }
        function amIlogged(){
            if(isset($_SESSION['UID'])){
                return true;
            }
            else{
                return false;
            }
        }
        function should_I_Log($username, $password){
            $ret=array();
            $ret['id']=0;
            if(!isset($_SESSION['chack'])){$_SESSION['chack']=0;}
            // brute force protect
            if($_SESSION['chack']<5){
                
                        $password = $this->enc_pass($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";                      
                        $results = mysqli_query($this->mysqli, $query);

                        if (mysqli_num_rows($results) == 1) {
                        $ret = mysqli_fetch_assoc($results);

                        	return  $ret;
                        	} else {
                                $_SESSION['chack']++;
                        	return false;
                        	}
                         }
                         return false;
        }
        
        function logOut(){
            	session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
        }

	}


?>
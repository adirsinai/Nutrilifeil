<?php
session_start();

$selid=2;
// deal with form data
                $idsub=$_SESSION['UID'];
	        $firstname = (isset($_GET['firstname']))? $_GET['firstname'] : '';
   		$lastname = (isset($_GET['lastname']))? $_GET['lastname'] : '';
        	$email = (isset($_GET['email']))? $_GET['email'] : '';
		$age = (isset($_GET['age']))? $_GET['age'] : '';
		$employment = (isset($_GET['employment']))? $_GET['employment'] : '';
		$diseases = (isset($_GET['diseases']))? $_GET['diseases'] : '';
		$medicines = (isset($_GET['medicines']))? $_GET['medicines'] : '';
               	$height = (isset($_GET['height']))? $_GET['height'] : '';
               	$weight = (isset($_GET['weight']))? $_GET['weight'] : '';
               	$scope = (isset($_GET['scope']))? $_GET['scope'] : '';
                $hip = (isset($_GET['hip']))? $_GET['hip'] : '';
                $gender = (isset($_GET['gender']))? $_GET['gender'] : '';
                if ($gender == male){
                $calorie = 66.5+(13.8*$weight)+(5*$height)-(6.8*$age);
                }
                if ($gender == female){
                $calorie = 655.1+(9.6*$weight)+(1.9*$height)-(4.7*$age);
                }
                $bmi = $weight / ($height * $height/10000); 
                
                
        include "class_client_mngr.php";
        $client_mngr = new client_mngr(); 
        if (isset($_GET['new_client'])) {
        $client_mngr->add_client($idsub, $firstname, $lastname, $email, $age, $employment, $diseases, $medicines, $height, $weight, $scope, $hip, $gender, $calorie, $bmi);
        }
ob_start();
include "tpl_menu.php";
$menu = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_header.php";
$hdr = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_inuser.php";
$cnt = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_footer.php";
$ftr = ob_get_contents();
ob_end_clean();

include "tpl_basic.php";

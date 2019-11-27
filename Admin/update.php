<?php
session_start();
$selid=3;
// deal with form data
               	$idsub = $_SESSION['UID'];
               	$idclient=(isset($_GET['cid']))? $_GET['cid'] : '';
                $height = (isset($_GET['eheight']))? $_GET['eheight'] : '';
                $weight = (isset($_GET['eweight']))? $_GET['eweight'] : '';   	
               	$scope = (isset($_GET['escope']))? $_GET['escope'] : '';
                $hip = (isset($_GET['ehip']))? $_GET['ehip'] : '';
                $bmi = $weight / ($height * $height/10000);
                
        include "class_client_mngr.php";
        $client_mngr = new client_mngr(); 
        if (isset($_GET['save_client'])) {
        $client_mngr->save_client($idsub, $idclient, $height, $weight, $scope, $hip, $bmi);
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
include "tpl_update.php";
$cnt = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_footer.php";
$ftr = ob_get_contents();
ob_end_clean();

include "tpl_basic.php";

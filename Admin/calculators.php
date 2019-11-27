<?php
session_start();
$selid=4;

    $food = (isset($_GET['food']))? $_GET['food'] : '';
    $mincal = (isset($_GET['mincal']))?(int) $_GET['mincal'] : '';
    $maxcal = (isset($_GET['maxcal']))?(int) $_GET['maxcal'] : '';

    include "class_search_mngr.php";
    $search_mngr = new search_mngr();
    if (isset($_GET['info'])){
    $reto=$search_mngr->search($food, $mincal, $maxcal);
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
include "tpl_calculators.php";
$cnt = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_footer.php";
$ftr = ob_get_contents();
ob_end_clean();

include "tpl_basic.php";

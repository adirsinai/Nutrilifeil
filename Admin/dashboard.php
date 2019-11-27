<?php
session_start();
$selid=1;
    include "class_client_mngr.php";
    $client_mngr = new client_mngr();
    $cust_list=$client_mngr->customers_link();
    


ob_start();
include "tpl_menu.php";
$menu = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_header.php";
$hdr = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_dashboard.php";
$cnt = ob_get_contents();
ob_end_clean();

ob_start();
include "tpl_footer.php";
$ftr = ob_get_contents();
ob_end_clean();

include "tpl_basic.php";

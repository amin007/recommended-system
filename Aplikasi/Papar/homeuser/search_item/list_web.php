<?php $pautan = URL . 'sumber/rangka-dawai/homeuser/';
\Aplikasi\Kitab\Sesi::init();
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
$classTable[] = "table table-bordered table-striped";
$classTable[] = "table table-bordered table-striped with-check";
$classTable[] = "table table-bordered data-table";
//$classTable[] = "display";
$papar_jadual = "3.1";
$jquery_khas = "kosong";

include 'file_header.php';
include 'file_menubar.php';
include 'papar_jadual3.php';
include 'file_footer.php';
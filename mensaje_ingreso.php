<?php
include_once "./inicializacion.php";



$smarty= new smarty;
$smarty->assign('m',$_GET['m']);
$smarty->assign('d',$_GET['d']);
$smarty->display('mensaje_ingreso.html');


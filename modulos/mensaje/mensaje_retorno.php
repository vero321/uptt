<?php
define('MOD', 'mensaje'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';



#$smarty= new smarty;
$smarty->assign('m',$_GET['m']);
$smarty->assign('d',$_SESSION['retorno']);
$smarty->display('mensaje.html');

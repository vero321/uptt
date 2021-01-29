<?php 
define('MOD', 'trabajos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$r = '../trabajos/trabajos_antiguos.php?s=';
	$_SESSION['retorno']=$r;
$gestor = opendir('../../tmp');
$archivos = [];

 while (false !== ($entrada = readdir($gestor))) 
 {
 	if ($entrada[0] != '.') 
 	{
 		$entrada = explode('.', $entrada)[0];
        $archivos[]=$entrada;
 	}

 }
$smarty->assign('archivos',$archivos);
 
$smarty->display('trabajos_antiguos.html');
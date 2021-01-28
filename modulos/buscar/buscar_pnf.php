<?php 
define('MOD', 'buscar'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$ids = bd_documentos_buscar_nucleo($_GET);
$d=[];
foreach ($ids as $z)
{
	$d[] = bd_documentos_ficha($z);
}

$smarty->assign('d', $d);
$smarty->assign('nucleo', bd_nucleos_datos($_GET['n']));
$smarty->display('buscar_pnf.html');
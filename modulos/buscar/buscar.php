<?php 
define('MOD', 'buscar'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

if (!isset($_GET['avanzada'])) {
	$_GET['avanzada'] = [];
}

switch ($_GET['avanzada']) {
	case 'SI':
			$ids = bd_documento_avanzada($_GET);
		break;
	
	case 'NO':
		$texto = limpiar_texto($_GET['texto'],'buscar' );
		$ids = bd_documentos_buscar($texto);
		break;
	
	default:
		$ids = [];
		break;
}

$d = [];

foreach ($ids as $z)
{
	$d[] = bd_documentos_ficha($z);
}


$smarty->assign('d', $d);
$smarty->display('buscar.html');
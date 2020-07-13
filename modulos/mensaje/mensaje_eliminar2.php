<?php
define('MOD', 'mensaje'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';


		$smarty->assign('no',$_POST['no']);
		$smarty->assign('si',$_POST['si']);
		$smarty->assign('e',$_POST['nombre_corto']);
		$smarty->assign('id',$_POST['id']);

		$smarty->display('mensaje_eliminar.html');


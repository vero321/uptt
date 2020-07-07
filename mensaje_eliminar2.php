<?php
define('MOD', ''); 
require_once './app.php';
include_once APP.'/modulos/config/inicializacion.php';

		$smarty= new smarty;
		$smarty->assign('no',$_POST['no']);
		$smarty->assign('si',$_POST['si']);
		$smarty->assign('e',$_POST['nombre_corto']);
		$smarty->assign('id',$_POST['id']);

		$smarty->display('mensaje_eliminar.html');


<?php
	include_once "./inicializacion.php";


		$smarty= new smarty;
		$smarty->assign('no',$_POST['no']);
		$smarty->assign('si',$_POST['si']);
		$smarty->assign('e',$_POST['privilegio']);
		$smarty->assign('id',$_POST['id']);

		$smarty->display('mensaje_eliminar.html');

<?php
	include_once "./inicializacion.php";


	$smarty= new smarty;
	$smarty->assign('no',$_POST['no']);
	$smarty->assign('si',$_POST['si']);
	$smarty->assign('e',$_POST['correo']);
	$smarty->assign('id',$_POST['id']);
	$smarty->assign('nivel',$_POST['nivel']);
	if (isset($_POST['rol'])) {
	# verificamos si resive algun rol para eliminar ese rol en espesifico
	$rol=$_POST['rol'];
	$smarty->assign('rol',$rol);
	}

	$smarty->display('mensaje_eliminar.html');


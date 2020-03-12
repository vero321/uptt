<?php
include_once "./inicializacion.php";
$nivel="100";
$roles=bd_roles_datos();
$smarty->assign('nivel',$nivel);
$smarty->assign('roles',$roles);
$smarty->display('agregar_admin.html');
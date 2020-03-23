<?php
include_once "./inicializacion.php";
$privilegios=bd_privilegios_datos();
$smarty->assign('privilegios',$privilegios);
$smarty->display('roles_agregar.html');

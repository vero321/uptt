<?php 
include_once "./inicializacion.php";

$n_lineas=bd_lineas_contar();

$verificar=privilegios();
$smarty->assign('verificar',$verificar);



$smarty->assign('lineas', bd_lineas_datos());
$smarty->assign('n_lineas',$n_lineas);

$smarty->assign('pie', file_get_contents('pie/usuarios.html'));

$smarty->display('lineas.html');
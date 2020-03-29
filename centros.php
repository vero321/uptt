<?php 
include_once "./inicializacion.php";

$n_centros=bd_centros_contar();

$verificar=privilegios();
$smarty->assign('verificar',$verificar);

$smarty->assign('centros', bd_centros_datos());
$smarty->assign('n_centros',$n_centros);
$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('centros.html');
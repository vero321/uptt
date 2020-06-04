<?php 
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$n_centros=bd_centros_contar();


$smarty->assign('centros', bd_centros_datos());
$smarty->assign('n_centros',$n_centros);
$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('centros.html');
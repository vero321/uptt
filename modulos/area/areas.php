<?php 
define('MOD', 'area'); 
require_once '../config/app.php';

include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
#vq($_SESSION);
$smarty->assign('verificar',$verificar);


$n_areas=bd_areas_contar();
$smarty->assign('areas', bd_areas_datos());
$smarty->assign('n_areas',$n_areas);
$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));

$smarty->display('areas.html');
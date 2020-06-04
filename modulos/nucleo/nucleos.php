<?php 
define('MOD', 'nucleo'); 
require_once '../../app.php';

include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$n_nucleos=bd_nucleos_contar();
$smarty->assign('nucleos', bd_nucleos_datos());
$smarty->assign('n_nucleos',$n_nucleos);
$smarty->assign('pie', file_get_contents(APP.'/pie/usuarios.html'));

$smarty->display('nucleos.html');
<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);






$n_propuesta=bd_propuesta_contar_lider();
$smarty->assign('propuestas', bd_propuestas_datos_lider());
$smarty->assign('n_propuesta',$n_propuesta);
$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));
$smarty->display('propuesta.html');
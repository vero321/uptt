<?php 
define('MOD', 'pnf'); 
require_once '../config/app.php';

include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$n_pnf=bd_pnf_contar();
$smarty->assign('pnf', bd_pnf_datos());
$smarty->assign('n_pnf',$n_pnf);
$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));
$smarty->display('pnf.html');
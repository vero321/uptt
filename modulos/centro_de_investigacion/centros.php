<?php 
define('MOD', 'centro_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$smarty->assign('verificar',$verificar);


$n_centros=bd_centros_contar();


$smarty->assign('centros', bd_centros_datos());
$smarty->assign('n_centros',$n_centros);
$smarty->display('centros.html');
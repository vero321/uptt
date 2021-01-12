<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
bd_propuestas_modificar($_POST);
$m="La propuesta se modifico correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
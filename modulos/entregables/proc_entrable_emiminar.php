<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
bd_entregables_eliminar($_GET);
$m="El entregable se elimino correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
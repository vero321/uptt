<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();


bd_entregables_modificar($_POST);
$m="El entregable se modifico correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
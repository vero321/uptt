<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

bd_seccion_tipo_documento($_POST);
$m="El tipo de documento se añadio correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
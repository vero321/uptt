<?php 
define('MOD', 'observaciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';


bd_observaciones_añadir($_POST);

$m="La observacion se añadio correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");

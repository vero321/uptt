<?php 
define('MOD', 'observaciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

if (isset($datos['comite'])){
	bd_observaciones_añadir_comite($_POST);
}else{
	bd_observaciones_añadir($_POST);
}

$m="La observacion se añadio correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");

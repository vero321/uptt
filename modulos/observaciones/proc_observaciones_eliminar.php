<?php 
define('MOD', 'observaciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id=$_GET['id'];
bd_obdervaciones_eliminar($id);

$m="La observacion se elimino correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");

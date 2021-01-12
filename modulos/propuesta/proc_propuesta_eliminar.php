<?php
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();
$id=$_GET['id'];
bd_propuestas_eliminar($id);
$m = "La propuesta a sido eliminada";
ir("../mensaje/mensaje_retorno.php?m=$m");
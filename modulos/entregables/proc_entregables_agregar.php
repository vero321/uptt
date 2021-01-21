<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$seccion = bd_secciones_datos($_POST['seccion']);
$datos = $_POST;
$datos['id_tipo_de_documento'] = $seccion['id_tipo_de_documento'];
$datos['id'] = uniqid();
$datos['docente'] = $_SESSION['u']['id'];
bd_entregables_agregar($datos);
$m="El entregable se añadio correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
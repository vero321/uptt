<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$propuestas = $_POST['id_propuestas'];
$observacion = $_POST['observacion'];
$status = $_POST['status'];

#bd_propuesta_cambiar_estatus($propuestas, $observacion, $status);

vq($status);
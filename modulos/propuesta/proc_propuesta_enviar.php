<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$propuesta = $_GET['id'];
$e = $_GET['e'];
$status = array(
	0 => 'NUEVA',
	1 => 'ENVIADA',
	2 => 'EVALUANDO'
 );

bd_propuesta_cambiar_estatus($propuesta, $status[$e]);

$m="La propuesta fue enviada";
ir("../mensaje/mensaje_retorno.php?m=$m");

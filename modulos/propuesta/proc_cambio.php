<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

bd_proposicion_cambiar($_POST);
bd_propuesta_cambiar_estatus($_POST['id'], 'EVALUADA');

$m="La propuesta a sido evaluada.";
ir("../mensaje/mensaje_retorno.php?m=$m");
<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$personas = $_POST;
$nombre=bd_personas_modicar($personas);

$m="Datos <strong>$id</strong> modificados con exito";
ir("../mensaje/mensaje.php?m=$m&d=../personas/personas_datos.php");

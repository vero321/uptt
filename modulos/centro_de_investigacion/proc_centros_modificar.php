<?php 
define('MOD', 'centro_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$centros = $_POST;

$n_mod=bd_centros_modicar($centros);



$m="Centro <strong>$nombre</strong> modificado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../centro_de_investigacion/centros.php");


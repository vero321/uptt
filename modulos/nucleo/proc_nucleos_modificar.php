<?php
define('MOD', 'nucleo'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$nucleos = $_POST;

$n_mod=bd_nucleos_modicar($nucleos);



$m="Nucleo <strong>$id</strong> modificado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../nucleo/nucleos.php");


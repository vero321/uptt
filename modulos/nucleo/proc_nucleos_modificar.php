<?php
define('MOD', 'nucleo'); 
require_once '../../app.php';
require_once APP."/modulos/config/inicializacion.php";

$nucleos = $_POST;

$n_mod=bd_nucleos_modicar($nucleos);



$m="Nucleo <strong>$id</strong> modificado con exito";
ir("../../mensaje.php?m=$m&d=./modulos/nucleo/nucleos.php");


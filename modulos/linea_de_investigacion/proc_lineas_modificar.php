<?php
define('MOD', 'linea_de_investigacion'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$lineas = $_POST;

$n_mod=bd_lineas_modicar($lineas);



$m="Linea <strong>$nombre</strong> modificada con exito";
ir("../mensaje/mensaje.php?m=$m&d=../linea_de_investigacion/lineas.php");


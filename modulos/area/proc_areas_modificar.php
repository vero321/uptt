<?php
define('MOD', 'area'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$areas = $_POST;

$a_mod=bd_areas_modicar($areas);



$m="El Area de Trabajo <strong>$id</strong> fue modificada con exito";
ir("../mensaje/mensaje.php?m=$m&d=../area/areas.php");


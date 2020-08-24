<?php
define('MOD', 'area'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$areas = $_POST;

$a_mod=bd_areas_pnf_modificar($areas);



$m="Area <strong>$id</strong> modificada con exito";
ir("../mensaje/mensaje.php?m=$m&d=../area/areas_pnf.php");


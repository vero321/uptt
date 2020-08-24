<?php
define('MOD', 'area'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$id=$_POST;
bd_areas_pnf_eliminar($id);



$m="Línea de Investigación eliminada con exito";
ir("../mensaje/mensaje.php?m=$m&d=../area/areas_pnf.php");



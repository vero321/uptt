<?php
define('MOD', 'linea_de_investigacion'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$id=$_POST;
bd_lineas_eliminar($id);



$m="Línea de Investigación eliminada con exito";
ir("../../mensaje.php?m=$m&d=modulos/linea_de_investigacion/lineas.php");



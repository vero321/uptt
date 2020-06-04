<?php
define('MOD', 'lineas_de_investigacion'); 
require_once '../../app.php';
require_once APP."/modulos/config/inicializacion.php";

$id=$_POST;
bd_lineas_eliminar($id);



$m="Línea de Investigación eliminada con exito";
ir("../../mensaje.php?m=$m&d=./modulos/pnf/lineas.php");



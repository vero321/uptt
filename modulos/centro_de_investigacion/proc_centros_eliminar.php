<?php 
define('MOD', 'centro_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id=$_POST;
bd_centros_eliminar($id);



$m="Centro de Investigación eliminado con exito";
ir("../../mensaje.php?m=$m&d=modulos/centro_de_investigacion/centros.php");



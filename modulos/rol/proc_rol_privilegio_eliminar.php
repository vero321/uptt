<?php 
define('MOD', 'rol'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id = $_GET['id'];
$privilegio = $_GET['privilegio'];

bd_eliminar_privilegios_rol($id,$privilegio);

$m="Privilegio eliminado con exito";
ir("../../mensaje.php?m=$m&d=modulos/rol/roles_datos.php?id=$id");



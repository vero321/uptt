<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$id = $_GET['id'];
$rol = $_GET['rol'];

bd_eliminar_rol_usuario($id,$rol);

$m="Rol eliminado con exito";
ir("mensaje.php?m=$m&d=usuarios_roles.php?id=$id&rol=$id");



<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id_rol = $_GET['id'];
$id = $_GET['usuario'];

bd_eliminar_rol_usuario($id_rol);

$m="Rol eliminado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../usuario/usuarios_roles.php?id=$id");



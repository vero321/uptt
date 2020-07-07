<?php 
define('MOD', 'roles'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id=$_POST['id'];


bd_roles_eliminar($id);
bd_eliminar_privilegios_rol($id);

$m="Rol eliminado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../roles/roles.php");



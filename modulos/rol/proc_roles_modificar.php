<?php
define('MOD', 'rol'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$_POST['id']=bd_roles_modificar($_POST);
$rol = $_POST['rol'];

$m="Rol <strong>$rol</strong> modificado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../rol/roles.php");

<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$_POST['id']=bd_usuarios_modificar($_POST);
$id = $_POST['id'];
$rol_listar=$_POST['rol_listar'];
$m="Usuario <strong>$id</strong> modificado con exito";
ir("../../mensaje.php?m=$m&d=modulos/usuario/usuarios.php?5ea6fd8de7329=$rol_listar");

ir('usuarios.php');
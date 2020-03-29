<?php 
include_once "./inicializacion.php";
verificar();

$id = $_GET['id'];
$rol = $_GET['rol'];

bd_eliminar_rol_usuario($id,$rol);

$m="Rol eliminado con exito";
ir("mensaje.php?m=$m&d=usuarios_datos.php?id=$id&rol=$id");



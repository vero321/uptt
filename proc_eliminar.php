<?php
require_once './inicializacion.php';
$id=$_POST['id'];

bd_usuarios_eliminar($id);
bd_eliminar_rol_usuario($id);

$m="Usuario eliminado con exito";
ir("mensaje.php?m=$m&d=usuarios.php");



<?php
require_once './inicializacion.php';
$id=$_POST['id'];
$nivel=$_POST['nivel'];
$rol_listar=$_POST['rol_listar'];

if ($nivel == 1000) {
	# si el nivel en igual a 1000 o a 900 elimina el usuario y todos sus roles
	bd_usuarios_eliminar($id);
	bd_eliminar_rol_usuario($id);
	$m="Usuario eliminado con exito";
	ir("mensaje.php?m=$m&d=usuarios.php?5ea6fd8de7329=5ea6fd8de75be");
}elseif (isset($_POST['rol'])) {
	# code...
	$id_rol=$_POST['rol'];
	bd_eliminar_rol_usuario($id,$id_rol);
	$m="Usuario eliminado con exito";
	ir("mensaje.php?m=$m&d=usuarios.php?5ea6fd8de7329=$rol_listar");
}




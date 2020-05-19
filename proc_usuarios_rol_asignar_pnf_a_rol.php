<?php 
include_once "./inicializacion.php";
$pnf=$_POST['pnf'];

$id=$_POST['id'];
$id_usuario=$_POST['id_usuario'];

$sql="
	UPDATE USUARIOS__ROLES SET
		id_pnf = '{$pnf}'
	WHERE id = '{$id}'
    ";
sql($sql);


$m="PNF asignado con exito";
ir("mensaje.php?m=$m&d=usuarios_roles.php?id=$id_usuario");

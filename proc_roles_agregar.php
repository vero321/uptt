<?php
include_once "./inicializacion.php";
#vq($privilegios);

$rol=$_POST['rol'];
$privilegios=$_POST['privilegios'];
$n_privilegios=count($privilegios);
$sql="SELECT id  FROM ROLES WHERE id LIKE '{$id}'";
$verificacion_id = sql2row($sql);
if ($verificacion_id > 0) {
	#si el usuario estaregistrado
	$m=" El Rol <strong>$rol</strong> ya esta registrado use otro nombre para agregar un nuevo rol";
	ir("mensaje.php?m=$m&d=usuarios.php");
}else{
	$id = bd_roles_argregar($_POST,$n_privilegios,$privilegios);
	$m="El rol <strong>$rol</strong> se agregó correctamente a la lista de roles";
	ir("mensaje.php?m=$m&d=roles.php");


}
<?php
define('MOD', 'roles'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$rol=$_POST['rol'];
$privilegios=$_POST['privilegio'];
$n_privilegios=count($privilegios);
$sql="SELECT id  FROM ROLES WHERE rol LIKE '{$rol}'";
$verificacion_id = sql2row($sql);
if ($verificacion_id > 0) {
	#si el Rol estaregistrado
	$m=" El Rol <strong>$rol</strong> ya esta registrado use otro nombre para agregar un nuevo rol";
	ir("../mensaje/mensaje.php?m=$m&d=../roles.php");
}else{
	$id = bd_roles_argregar($_POST,$n_privilegios,$privilegios);
	$m="El rol <strong>$rol</strong> se agregó correctamente a la lista de roles";
	ir("../mensaje/mensaje.php?m=$m&d=../roles/roles.php");

}
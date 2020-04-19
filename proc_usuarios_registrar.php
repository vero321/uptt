<?php
require_once './inicializacion.php';
#vq($_POST);
$roles=$_POST['rol'];
$n_roles=count($roles);
$id=$_POST['id'];
$correo=$_POST['correo'];

$sql1="SELECT id, correo FROM USUARIOS WHERE id LIKE '{$id}'";

$sql2="SELECT id, correo FROM USUARIOS WHERE correo LIKE '{$correo}' ";

$verificacion_id = sql2row($sql1);
$verificacion_correo = sql2row($sql2);

if ($verificacion_id > 0) {
	#si el usuario estaregistrado
	$m=" El usuario <strong>$id</strong> ya esta registrado";
	ir("mensaje.php?m=$m&d=usuarios.php");
}
if ($verificacion_correo > 0) {
	#si el correo estaregistrado
	$m=" El usuario <strong>$correo</strong> ya esta registrado";
	ir("mensaje.php?m=$m&d=usuarios.php");
}
else{
	
	$a=$_POST['hash']=password_hash($_POST['id'], PASSWORD_DEFAULT);
	$id = bd_usuarios_registrar($_POST,$n_roles,$roles);


	

	$m="Usuario <strong>$id</strong> se agregó correctamente a la lista de usuarios";
	ir("mensaje.php?m=$m&d=usuarios.php");

}



<?php
require_once './inicializacion.php';

$id=$_POST['id'];

$sql="SELECT id FROM usuarios WHERE id LIKE '{$_POST['id']}' ";
$verificacion = sql2row($sql);



if ($verificacion > 0) {
	#si el usuario estaregistrado
	$m=" El usuario <strong>$id</strong> ya esta registrado";
	ir("mensaje.php?m=$m&d=usuarios.php");
}
else{

	


	$a=$_POST['hash']=password_hash($_POST['id'], PASSWORD_DEFAULT);
	$id = bd_usuarios_registrar($_POST);
	

	$m="Usuario <strong>$id</strong> se agregó correctamente a la lista de usuarios y se creó su carpeta personal.";
	ir("mensaje.php?m=$m&d=usuarios.php");

}



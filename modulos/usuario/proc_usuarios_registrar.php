<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();

$id=$_POST['id'];
$correo=$_POST['correo'];
$rol_listar=$_POST['rol_listar'];


#vq($_POST);


$sql0="SELECT id, correo FROM USUARIOS WHERE id LIKE '{$id}' and  correo LIKE '{$correo}'";



$consulta = sql2row($sql0);


if ($consulta > 0) {
	$m=" El usuario <strong>$correo</strong> ya esta registrado";
	ir("../mensaje/mensaje.php?m=$m&d=../usuario/usuarios.php?5ea6fd8de7329=$rol_listar");
	
}else{
	
	$a=$_POST['hash']=password_hash($_POST['id'], PASSWORD_DEFAULT);
	$id = bd_usuarios_registrar($_POST);

	$m="Usuario <strong>$id</strong> se agregó correctamente a la lista de usuarios";
	ir("../mensaje/mensaje.php?m=$m&d=../usuario/usuarios.php?5ea6fd8de7329=$rol_listar");

}



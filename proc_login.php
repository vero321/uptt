<?php
require_once './inicializacion.php';


$login=limpiar_texto($_POST['login'],'email');
$clave=($_POST['clave']);
$hash=bd_usuarios_hash($login);
#vq($hash);

if (password_verify($clave, $hash))
{
	$_SESSION['u']=bd_usuarios_datos($login);
	ir($destinos[$_SESSION['u']['privilegio_id']]);
} else{
	ir('index.php');
}

<?php
include_once "./inicializacion.php";

$id = $_SESSION['u']['id'];

$smarty->assign('d', bd_usuarios_datos($id));
$smarty->display('usuarios_cambiar_clave.html');

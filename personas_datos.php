<?php
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$id = $_SESSION['u']['id'];
#vq($_SESSION);


$smarty->assign('personas', bd_personas_datos($id));
$smarty->assign('usuarios', bd_usuarios_datos($id));
$smarty->assign('pie', file_get_contents('pie/personas.html'));

$smarty->display('personas_datos.html');

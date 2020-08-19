<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();


$id = $_SESSION['u']['id'];
#vq($_SESSION);


$smarty->assign('id', $id);
$smarty->assign('personas', bd_personas_datos($id));
$smarty->assign('usuarios', bd_usuarios_datos($id));
$smarty->assign('pie', file_get_contents('../pie/personas.html'));

$smarty->display('personas_datos.html');

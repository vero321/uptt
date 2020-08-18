<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();

$id = $_SESSION['u']['id'];

$persona=bd_personas_datos($id);

$smarty->assign('persona', $persona);
$smarty->display('personas_cambiar_foto.html');

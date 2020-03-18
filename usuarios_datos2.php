<?php
include_once "./inicializacion.php";


$id = $_SESSION['u']['id'];
#vq($_SESSION);


$smarty->assign('personas', bd_personas_datos($id));
$smarty->assign('usuarios', bd_usuarios_datos($id));
$smarty->display('usuarios_datos2.html');

<?php
include_once "./inicializacion.php";
verificar();


$id = $_GET['id'];


$smarty->assign('personas', bd_personas_datos($id));
$smarty->display('personas_modificar.html');

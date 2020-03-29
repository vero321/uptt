<?php
include_once "./inicializacion.php";
verificar();



$id = $_GET['id'];

$smarty->assign('centros', bd_centros_datos($id));
$smarty->display('centros_eliminar.html');

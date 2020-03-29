<?php
include_once "./inicializacion.php";
verificar();



$id = $_GET['id'];

$smarty->assign('lineas', bd_lineas_datos($id));
$smarty->display('lineas_eliminar.html');

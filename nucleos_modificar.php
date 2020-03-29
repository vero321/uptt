<?php
include_once "./inicializacion.php";
verificar();

$id = $_GET['id'];


$smarty->assign('nucleos', bd_nucleos_datos($id));

$smarty->display('nucleos_modificar.html');

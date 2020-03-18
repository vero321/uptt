<?php
include_once "./inicializacion.php";


$id = $_GET['id'];

$smarty->assign('nucleos', bd_nucleos_datos($id));
$smarty->display('nucleos_eliminar.html');

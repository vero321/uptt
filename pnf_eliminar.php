<?php
include_once "./inicializacion.php";
verificar();

$id = $_GET['id'];

$smarty->assign('pnf', bd_pnf_datos($id));

$smarty->display('pnf_eliminar.html');

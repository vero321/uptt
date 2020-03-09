<?php
include_once "./inicializacion.php";

$id = $_GET['id'];


$smarty->assign('pnf', bd_pnf_datos($id));

$smarty->display('pnf_modificar.html');

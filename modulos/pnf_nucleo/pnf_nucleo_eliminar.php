<?php 
define('MOD', 'pnf_nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id=$_GET['id'];
$id_pnf=$_GET['id_pnf'];
$pnf=bd_pnf_datos($id_pnf);

$smarty->assign('id',$id);
$smarty->assign('pnf',$pnf);
$smarty->display('pnf_nucleo_eliminar.html');
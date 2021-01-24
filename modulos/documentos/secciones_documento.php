<?php 
define('MOD', 'documentos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();
$smarty->assign('verificar',$verificar);
$r = '../documentos/secciones_entregables.php';
$_SESSION['retorno']=$r;

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 
$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=$_SESSION['r'][$_SESSION['numero']]['pnf'];#Guarda la id del PNF
$id_profesor=$_SESSION['u']['id'];#Guarda el id de la persona

$secciones_profesor=bd_secciones_profesor($id_profesor, $id_pnf, $id_nucleo);
#vq($secciones_profesor);
$smarty->assign('pnf',$pnf);
$smarty->assign('secciones_profesor',$secciones_profesor);
$smarty->display('secciones_documentos.html');

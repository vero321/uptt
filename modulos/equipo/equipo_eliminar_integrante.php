<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$id=$_GET['id'];
$id_equipo=$_GET['id_equipo'];

$persona=bd_personas_datos($id);

$smarty->assign('id',$id);
$smarty->assign('id_equipo',$id_equipo);
$smarty->assign('persona',$persona);
$smarty->display('equipo_eliminar_integrante.html');
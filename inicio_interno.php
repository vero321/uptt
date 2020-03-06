<?php
include_once "./inicializacion.php";

$usurios=bd_usuarios_contar();
$sedes=bd_sedes_contar();
$carreras=bd_carreras_contar();

$smarty->assign('usurios',$usurios);
$smarty->assign('sedes',$sedes);
$smarty->assign('carreras',$carreras);
$smarty->display('inicio_interno.html');


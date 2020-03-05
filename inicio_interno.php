<?php
include_once "./inicializacion.php";

$usurios=bd_usuarios_contar();

$smarty->assign('usurios',$usurios);
$smarty->display('inicio_interno.html');


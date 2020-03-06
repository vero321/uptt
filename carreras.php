<?php 
include_once "./inicializacion.php";



$smarty->assign('pie', file_get_contents('pie/usuarios.html'));

$smarty->display('carreras.html');
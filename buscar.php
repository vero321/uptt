<?php
include_once "./inicializacion.php";

$_SESSION=[];


$smarty->assign('pie', file_get_contents('pie/personas.html'));

$smarty->display('buscar.html');


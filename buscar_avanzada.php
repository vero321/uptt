<?php
include_once APP.'/modulos/config/inicializacion.php';

$_SESSION=[];


$smarty->assign('pie', file_get_contents('pie/personas.html'));

$smarty->display('buscar_avanzada.html');


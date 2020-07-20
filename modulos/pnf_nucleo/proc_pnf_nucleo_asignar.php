<?php 
define('MOD', 'pnf_nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$pnf=$_POST;
bd_pnf_nucleo_agregar($pnf);
$m="PNF Asignado correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../pnf_nucleo/pnf_nucleo.php");
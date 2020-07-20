<?php 
define('MOD', 'pnf_nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id=$_POST['id'];

bd_pnf_nucleo_eliminar($id);

$m="PNF Eliminado correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../pnf_nucleo/pnf_nucleo.php");
<?php 
define('MOD', 'comunidad'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
if (isset($_POST['valores'])) {
	$valores = $_POST['valores'];
	bd_comunidad_registrar($valores);
}
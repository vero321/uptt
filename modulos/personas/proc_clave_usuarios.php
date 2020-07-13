<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';



if (password_verify($clave,$hash)) {
	# code...
	echo "Bienvenido";
}
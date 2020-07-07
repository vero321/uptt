<?php
require_once APP."/modulos/config/inicializacion.php";



if (password_verify($clave,$hash)) {
	# code...
	echo "Bienvenido";
}
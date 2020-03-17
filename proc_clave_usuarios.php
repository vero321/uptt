<?php
require_once './inicializacion.php';



if (password_verify($clave,$hash)) {
	# code...
	echo "Bienvenido";
}
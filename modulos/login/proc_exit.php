<?php
define('MOD', 'login'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

session_start();
unset ($SESSION['u']);
session_destroy();

ir('../inicio/inicio.php');
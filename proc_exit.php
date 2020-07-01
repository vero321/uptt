<?php
define('MOD', ''); 
require_once './app.php';
require_once APP."/modulos/config/inicializacion.php";

session_start();
unset ($SESSION['u']);
session_destroy();

ir('index.php');
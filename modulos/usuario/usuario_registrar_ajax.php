<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';


$a=$_POST['hash']=password_hash($_POST['id'], PASSWORD_DEFAULT);
$id = bd_usuarios_registrar($_POST);
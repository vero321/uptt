<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

bd_estructura_agregar($_POST);
$m="El estructura agrego correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
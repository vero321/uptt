<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

bd_estructura_modificar($_POST);
$m="La estructura se modifico correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
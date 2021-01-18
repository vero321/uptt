<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

bd_tipos_documento_modificar($_POST);
$m="El tipo de trabajo se modifico correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
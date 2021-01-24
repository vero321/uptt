<?php 
define('MOD', 'documentos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$dir = '../../tmp/'.$_GET['id'].'.pdf';
bd_documento_eliminar($_GET);
unlink($dir);
$m="EL documento se elimino con exito";
ir("../mensaje/mensaje_retorno.php?m=$m");
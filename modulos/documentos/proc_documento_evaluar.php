<?php 
define('MOD', 'documentos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$datos = array(
    'descripcion' => $_POST['Observacion'], 
    'tipo' => 'TRABAJOS__DOCUMENTOS', 
    'fila' =>  $_POST['id']
);
bd_documento_enviar($_POST, $_POST['status']);
bd_observaciones_añadir($datos);
$m="El documento ha sido evaluado";
ir("../mensaje/mensaje_retorno.php?m=$m");
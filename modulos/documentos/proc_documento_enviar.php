<?php 
define('MOD', 'documentos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$status = array(
	'0' => 'SIN REVISAR',
	'1' => 'CORRECCIONES',
	'2' => 'APROBADO'
	 );
bd_documento_enviar($_GET, $status[$_GET['t']]);

$m="EL documento se envio con exito";
ir("../mensaje/mensaje_retorno.php?m=$m");
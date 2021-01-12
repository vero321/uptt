<?php 
define('MOD', 'observaciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

bd_observasiones_modficar($_POST);

$m="La observacion se edito correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
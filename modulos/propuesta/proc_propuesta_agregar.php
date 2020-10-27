<?php
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

bd_propuestas_datos_agregar($_POST);

	
#vq($_POST);

$m="La propuesta se agregó correctamente.";
ir("../mensaje/mensaje.php?m=$m&d=../equipo/equipo.php);
#vq($id);



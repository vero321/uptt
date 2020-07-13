<?php
define('MOD', 'nucleo'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$id=$_POST;
bd_nucleos_eliminar($id);



$m="Nucleo eliminado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../nucleo/nucleos.php");



<?php
require_once APP."/modulos/config/inicializacion.php";

$personas = $_POST;
$nombre=bd_personas_modicar($personas);

$m="Datos <strong>$id</strong> modificados con exito";
ir("mensaje.php?m=$m&d=personas_datos.php");

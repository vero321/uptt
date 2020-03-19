<?php
require_once './inicializacion.php';

$personas = $_POST;
$nombre=bd_personas_modicar($personas);

$m="Datos <strong>$nombre</strong> modificada con exito";
ir("mensaje.php?m=$m&d=personas_datos.php");

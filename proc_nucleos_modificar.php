<?php
require_once './inicializacion.php';

$nucleos = $_POST;

$n_mod=bd_nucleos_modicar($nucleos);



$m="Nucleo <strong>$id</strong> modificado con exito";
ir("mensaje.php?m=$m&d=nucleos.php");


<?php
require_once './inicializacion.php';

$lineas = $_POST;

$n_mod=bd_lineas_modicar($lineas);



$m="Linea <strong>$nombre</strong> modificada con exito";
ir("mensaje.php?m=$m&d=lineas.php");


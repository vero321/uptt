<?php
require_once './inicializacion.php';

$centros = $_POST;

$n_mod=bd_centros_modicar($centros);



$m="Centro <strong>$nombre</strong> modificado con exito";
ir("mensaje.php?m=$m&d=centros.php");


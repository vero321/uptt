<?php
require_once './inicializacion.php';

$id=$_POST;
bd_nucleos_eliminar($id);



$m="Nucleo eliminado con exito";
ir("mensaje.php?m=$m&d=nucleos.php");



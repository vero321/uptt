<?php
require_once './inicializacion.php';

$id=$_POST;
bd_lineas_eliminar($id);



$m="Línea de Investigación eliminada con exito";
ir("mensaje.php?m=$m&d=lineas.php");



<?php
require_once APP."/modulos/config/inicializacion.php";

$id=$_POST;
bd_centros_eliminar($id);



$m="Centro de Investigación eliminado con exito";
ir("mensaje.php?m=$m&d=centros.php");



<?php 
include_once "./inicializacion.php";

$id = $_GET['id'];
$privilegio = $_GET['privilegio'];

bd_eliminar_privilegios_rol($id,$privilegio);

$m="Privilegio eliminado con exito";
ir("mensaje.php?m=$m&d=roles_datos.php?id=$id");



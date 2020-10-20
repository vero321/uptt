<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$nombre = $_POST['nombre'];
$id_seccion = $_POST['id_seccion'];

bd_agregar_equipo($nombre, $id_seccion);
$m="Equipo agregado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../lider_seccion/lideres.php?id=".$id_seccion);
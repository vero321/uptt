<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';


$id=$_GET['id'];
$id_equipo=$_GET['id_equipo'];
bd_equipo_eliminar_integrante($id);

$m="Integrante eliminado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../equipo/equipo.php?id=".$id_equipo);
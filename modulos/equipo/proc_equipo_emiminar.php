<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';


$id=$_GET['id'];
$id_equipo=$_GET['id_equipo'];
$equipo=bd_equipo_lider($id_equipo);
$numero_integrantes=$equipo['numero_integrantes']-1;
bd_equipo_eliminar_integrante($id,$numero_integrantes,$id_equipo);

$m="Integrante eliminado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../equipo/equipo.php?id=".$id_equipo);
<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];

bd_cambiar_nombre($id, $nombre);
ir('equipo.php?id='.$id);
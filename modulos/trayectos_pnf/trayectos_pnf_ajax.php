<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

#Este archivo mustra la tabla TAYECTOS__PNF
#usa del rol para filtrar los datos correctamente

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 
$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$trayecto_pnf=bd_trayectos_pnf_datos($id_pnf, $id_nucleo);
print json_encode($trayecto_pnf, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX


<?php
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";


$nivel_instruccion = $_POST;

$n_mod=bd_trayectos_nivel_agregar($nivel_instruccion);

vq($n_mod);


$m="Linea <strong>$nombre</strong> modificada con exito";
ir("../mensaje/mensaje.php?m=$m&d=../linea_de_investigacion/lineas.php");





<?php
define('MOD', 'lider'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$id=$_POST;
bd_lider_eliminar($id);



$m="Líder eliminado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../lider_seccion/lider_seccion.php");



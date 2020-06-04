<?php
define('MOD', 'pnf'); 
require_once '../../app.php';
require_once APP."/modulos/config/inicializacion.php";

$id=$_POST;
bd_pnf_eliminar($id);



$m="PNF eliminado con exito";
ir("../../mensaje.php?m=$m&d=./modulos/pnf/pnf.php");



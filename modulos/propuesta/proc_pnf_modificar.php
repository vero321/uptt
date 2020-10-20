<?php
define('MOD', 'pnf'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

$pnf = $_POST;

$n_mod=bd_pnf_modicar($pnf);



$m="PNF <strong>$id</strong> modificado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../pnf/pnf.php");


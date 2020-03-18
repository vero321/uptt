<?php
require_once './inicializacion.php';

$pnf = $_POST;

$n_mod=bd_pnf_modicar($pnf);



$m="PNF <strong>$id</strong> modificado con exito";
ir("mensaje.php?m=$m&d=pnf.php");


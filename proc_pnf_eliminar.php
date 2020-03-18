<?php
require_once './inicializacion.php';

$id=$_POST;
bd_pnf_eliminar($id);



$m="PNF eliminado con exito";
ir("mensaje.php?m=$m&d=pnf.php");



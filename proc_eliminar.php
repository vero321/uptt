<?php
require_once './inicializacion.php';

bd_usuarios_eliminar($_POST);

$m="Usuario eliminado con exito";
ir("mensaje.php?m=$m&d=usuarios.php");



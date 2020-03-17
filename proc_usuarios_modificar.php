<?php
require_once './inicializacion.php';

$_POST['id']=bd_usuarios_modificar($_POST);
$id = $_POST['id'];

$m="Usuario <strong>$id</strong> modificado con exito";
ir("mensaje.php?m=$m&d=usuarios.php");

ir('usuarios.php');
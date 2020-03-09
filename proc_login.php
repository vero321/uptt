<?php
require_once './inicializacion.php';

$login=limpiar_texto($_POST['login'],'email');
$clave=($_POST['clave']);
$hash=bd_usuarios_hash($login);


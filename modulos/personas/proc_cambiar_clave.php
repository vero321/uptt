<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';


$id = $_POST['id'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];


if ( $clave1 == $clave2 and $clave1!='') 
{
    $claven = password_hash($clave1, PASSWORD_DEFAULT);
    bd_usuarios_modificar_clave([$id,$claven]);
    $m = "La clave de acceso de <strong>{$id}</strong> se cambió correctamente." ;
    ir("../mensaje/mensaje.php?m={$m}&d=../personas/personas_datos.php");
}else{
    $m = 'Error, intente nuevamente.';
    ir("../mensaje/mensaje.php?m={$m}&d=../personas/personas_datos.php");
}

<?php
require_once APP."/modulos/config/inicializacion.php";

$id = $_SESSION['u']['id'];
$clave0 = $_POST['clave0'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

$hash_bd = bd_usuarios_hash($id);

if (password_verify($clave0, $hash_bd)) 
{
    echo '¡La contraseña es válida!';
} 
else {
    echo 'La contraseña no es válida.';
}

if ( $clave1 == $clave2 and $clave1!='') 
{
	$claven = password_hash($clave1, PASSWORD_DEFAULT);
    bd_usuarios_modificar_clave([$id,$claven]);
    $m = "Su clave de acceso se cambió correctamente." ;
    ir("mensaje.php?m={$m}&d=personas_datos.php");
}else{
    $m = 'Error, intente nuevamente.';
    ir("mensaje.php?m={$m}&d=personas_datos.php");
}
    

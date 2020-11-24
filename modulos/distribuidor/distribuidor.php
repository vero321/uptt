<?php 
define('MOD', 'distribuidor');
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();
 if (!isset($_GET['r'])) {
 	session_start();
	unset ($SESSION['u']);
	session_destroy();
	ir('index.php');
  }
#es especial para el correcto funcionamiento del sistema 
#Este archivo se encarga de almacenar la informacion necesaria para separa 
#las Funciones de cada rol y las vistas a las cuales tiene acceso
#Resive dos variables r  almacena la id del rol y n almacena la posicion que esta tiene dentro de $_SESSION
# De esta manera el sistema identifica que rol y cuales permisos tine el usuario activos en ese momento y que entornos se encuentra navegando

$rol=$_GET['r'];
$n=$_GET['n'];
$r=$_SESSION['actual']=$rol;
$n=$_SESSION['numero']=$n;

#vq($_SESSION);

$privilegios=bd_roles__privilegios($rol);

$smarty->display('distribuidor.html');

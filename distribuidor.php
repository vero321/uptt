<?php 
include_once "./inicializacion.php";
verificar();
 if (!isset($_GET['r'])) {
 	session_start();
	unset ($SESSION['u']);
	session_destroy();
	ir('index.php');
  }

$rol=$_GET['r'];
$n=$_GET['n'];
$_SESSION['actual']=$rol;
$_SESSION['numero']=$n;

$privilegios=bd_roles__privilegios($rol);

$smarty->display('distribuidor.html');


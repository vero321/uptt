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
#vq($_SESSION);

$nucleos=bd_nucleos_contar();
$pnf=bd_pnf_contar();
$roles=bd_roles_contar();
$usuarios=bd_usuarios_contar();
$lineas=bd_lineas_contar();
$centros=bd_centros_contar();
#vq($_SESSION['p']);



$smarty->assign('nucleos',$nucleos);
$smarty->assign('lineas',$lineas);
$smarty->assign('centros',$centros);
$smarty->assign('pnf',$pnf);
$smarty->assign('usuarios',$usuarios);
$smarty->assign('roles',$roles);

$smarty->display('distribuidor.html');

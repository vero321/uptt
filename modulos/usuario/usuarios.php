<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$smarty->assign('verificar',$verificar);
#vq($_SESSION);
# Aca resivimos el codigo del rol se va a filtrar este viene desde la direccion del privilegio 
$rol=$_GET['5ea6fd8de7329'];

/*en estas variable se almacenan los datos del nucleo y el pnf que tiene el rol del usuario para así poder filtar los datos de los usuarios segun los nucleos y pnf correspondientes. Tambien se define el nivel del usuario para hacer el filtro
*/
$nivel=$_SESSION['r'][$_SESSION['numero']]['nivel'];
$nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
$pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];
# Mueestra todos los usuarios segun el nivel que le corresponda
#para ello requere las 
$usuarios=bd_usuarios_datos($login=NULL, $rol, $nucleo, $pnf, $nivel);
$n_datos=count($usuarios); #cuenta el numero de usuarios que resivio de la consulta anterior
foreach ($verificar as $clave => $codigo) {
    # En esta parte buscamos si el usuario tiene un permiso de asignar 
    # para separarlo y encontrar el codig del rol puede asignar
    if (strncmp($codigo, "ASIG_", 5) === 0){
        $asignar = substr($codigo, 5);
        $smarty->assign('asignar',$asignar);
    }
}

$smarty->assign('rol',$rol);
$smarty->assign('n_usuarios',$n_datos);
$smarty->assign('usuarios',$usuarios);

$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));
$smarty->display('usuarios.html');
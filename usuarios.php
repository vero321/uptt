<?php 
include_once "./inicializacion.php";
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$nivel=$_GET['n'];
$n_datos=bd_usuarios_contar($nivel);
$datos_por_pagina = $config['paginacion']['num_items'];
#vq($_SESSION);

if( isset( $_REQUEST['pag'] ) ){
    $pagina_actual = $_REQUEST['pag'];
    $i             = $_REQUEST['i'];
} else {
    $pagina_actual = 1;
    $i = 0;
}

if( isset( $_REQUEST['p'] ) ){
	#busqueda
    $usuarios=bd_usuarios_datos3('USUARIOS.id,correo',$_REQUEST['p'],$datos_por_pagina, $nivel);

} 
else {
	#todos los usuarios
    $usuarios=bd_usuarios_datos2($i, $datos_por_pagina, $nivel);

}



$paginas=paginar($n_datos,$datos_por_pagina,$pagina_actual);

$smarty->assign('i',$i);
$smarty->assign('b',$datos_por_pagina);
$smarty->assign('nivel',$nivel);
$smarty->assign('n_usuarios',$n_datos);
$smarty->assign('paginas',$paginas);
$smarty->assign('pagina_actual',$pagina_actual);
$smarty->assign('n_paginas',count($paginas));
$smarty->assign('usuarios',$usuarios);

$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('usuarios.html');
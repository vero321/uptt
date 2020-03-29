<?php 
include_once "./inicializacion.php";
verificar();

$nivel="1000";

$n_datos=bd_usuarios_contar();
$datos_por_pagina = $config['paginacion']['num_items'];


if( isset( $_REQUEST['pag'] ) ){
    $pagina_actual = $_REQUEST['pag'];
    $i             = $_REQUEST['i'];
} else {
    $pagina_actual = 1;
    $i = 0;
}

if( isset( $_REQUEST['p'] ) ){
    $usuarios=bd_usuarios_datos3('id,correo',$_REQUEST['p'],$datos_por_pagina);
} 
else {
    $usuarios=bd_usuarios_datos2($i, $datos_por_pagina, $orden='id', $nivel);
}
$paginas=paginar($n_datos,$datos_por_pagina,$pagina_actual);

$verificar=privilegios();
$smarty->assign('verificar',$verificar);


$smarty->assign('i',$i);
$smarty->assign('b',$datos_por_pagina);
$smarty->assign('n_usuarios',$n_datos);
$smarty->assign('paginas',$paginas);
$smarty->assign('pagina_actual',$pagina_actual);
$smarty->assign('n_paginas',count($paginas));
$smarty->assign('usuarios',$usuarios);

$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('usuarios.html');
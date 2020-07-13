<?php
define('MOD', 'rol'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$privilegios=bd_privilegios_datos();
$salida=array();
$salida2=array();

### El primer foreach crea el array que divide los nombres de cada privilegio
#
### El segundo foreach crea el array que divide los permisos de cada privilegio
### y utiliza la columna del código para clasificarlo segun su nombre ejemplo(NUCL)
### selecciona todo lo de nucleo y lo explota desde el ('_') agarrando solo lo que esta
### a su izquierda olvidando el resto del código 

foreach ($privilegios as $priv) 
{
	$salida[$priv['nombre']][]=$priv;
}
foreach ($salida as $nombre => $priv) 
{
	if ($nombre!="") 
	{
		$salida2[]=[
			'nombre'=>$nombre,
			'cod'=>explode('_', $priv[0]['codigo'])[0], 
			'p'=>$priv
		];
	}
}

$smarty->assign('privilegios',$salida2);
$smarty->display('roles_agregar.html');

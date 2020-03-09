<?php

/**
 * Estas funciones las deje solo por si mas adelante lo queremos usar....
 * Lee el archivo ri.conf y crea constantes a partir de las definiciones dadas
 * en el mismo
 * @return NULL
 */


function ri()
{
	$ri= array_filter (file(WAPP . "/config/ri.conf"),"no_es_comentario");
	foreach ($ri as $linea)
	{
		#$linea= explode("=", $linea);
		eval(
			preg_replace(
				"/([^=\s]+)(\s*=\s*\")([^\"]+).*/", 
				"define('$1','$3');", 
				$linea
			)
		);
	}
}

/**
 * @param   [string] $cadena
 * @return [bool]
 */
function no_es_comentario($cadena)
{
	$cadena=trim($cadena);

	if ($cadena[0]=='#')
	{
		return false;	
	}
	return true;
}






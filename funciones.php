<?php

#--Funciones principales de Smarty---#

function ver($ss){
/*   if(!(is_array($ss)||is_object($ss))){
      echo $ss;
   }else{
      echo ver2($ss);
   }
   */
   new dBug($ss);
}


function vq($a){
   new dBug($a);
   die('LRDTAB.');
}

function v(){
    new dBug(['SESSION'=>$_SESSION,'REQUEST'=>$_REQUEST]);
 }

 function ir($direccion)
 {
	header("Location: $direccion");
	exit();
}

#--Funciones del Sistema---#

function verificar($autorizados)
{	if (!isset($_SESSION['u'])) {
	ir('index.php');
}
	if (!in_array($_SESSION['u']['rol_id'], $autorizados)) 
	{
		$temp=bd_privilegios_datos($_SESSION['u']['rol_id']);
		$m=$temp['mensaje_error_acceso'];
		$d=$temp['menu'];	
    ir("mensaje.php?m=$m&d=$d") ;  
	}
}


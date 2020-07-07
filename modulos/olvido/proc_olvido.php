<?php
require_once APP."/modulos/config/inicializacion.php";

$correo=$_POST['correo'];
$sql="SELECT correo FROM USUARIOS WHERE correo LIKE '{$correo}' ";
$verificacion_correo = sql2row($sql);

if ($verificacion_correo > 0) {
	#si el correo estaregistrado
	$temp=bd_crear_temp($correo);


// Varios destinatarios
$para  = '$correo'; // atención a la coma

// título
$título = 'Recuperar Clave';

// mensaje
$mensaje = '
<html>
<head>
  <title>Recuperar Clave</title>
</head>
<body>
  <h2>Usted a solicitado cambio de clave en Repo</h2>
  Para recuperar tu contraseña ingresa con la siguiente clave ingresa con tu cedula y la siguiente clave <php? echo $temp ?>

</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'repo@upttmbi.edu.ve';


// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
	
	$m=" Los datos para recuperar su contraseña an sido enviados a <strong>$correo</strong>";
	ir("../mensaje/mensaje.php?m=$m&d=../inicio/inicio.php");
}else{
	# 
	$m="La cuenta de correo no esta registrada <strong>$correo</strong>";
	ir("../mensaje/mensaje.php?m=$m&d=../olvido/olvido.php");
}
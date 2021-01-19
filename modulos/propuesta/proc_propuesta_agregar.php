<?php
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$proposiones = array(
	0 => array(
		'id' => uniqid(true),
		'proposicion' => $_POST['proposicion1'],
		'objetivo' => $_POST['objetivo1'],
		'n_proposicion' => 'id_proposicion_1'
		),
	1 => array(
		'id' => uniqid(true),
		'proposicion' => $_POST['proposicion2'],
		'objetivo' => $_POST['objetivo2'],
			'n_proposicion' => 'id_proposicion_2'
		),
	2 => array(
		'id' => uniqid(true),
		'proposicion' => $_POST['proposicion3'],
		'objetivo' => $_POST['objetivo3'],
		'n_proposicion' => 'id_proposicion_3'
		)

);
bd_propuestas_agregar($_POST, $proposiones);

	

#vq($_POST);

$m="La propuesta se agregó correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
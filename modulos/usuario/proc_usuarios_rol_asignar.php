<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$rol=$_POST['rol'];
$id=$_POST['id'];

$sql="
    INSERT INTO USUARIOS__ROLES(id_usuario, id_rol)
    VALUES ('{$id}','{$rol}')
    ";

sql($sql);



$m="Rol asignado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../usuario/usuarios_roles.php?id=$id");

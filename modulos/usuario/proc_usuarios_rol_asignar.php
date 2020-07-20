<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$roles=$_POST['rol'];
$n_roles=count($roles);
$id=$_POST['id'];



for ($i=0; $i <$n_roles ; $i++) { 
    # code...
    $rol=$roles[$i];
    $sql="
        INSERT INTO USUARIOS__ROLES(id_usuario, id_rol)
        VALUES ('{$id}','{$rol}')
    ";
    sql($sql);
}

#$sql="
#    INSERT INTO USUARIOS__ROLES(id_usuario, id_rol)
#    VALUES ('{$id}','{$rol}')
#    ";

#sql($sql);



$m="Roles asignados con exito";
ir("../mensaje/mensaje.php?m=$m&d=../usuario/usuarios_roles.php?id=$id");

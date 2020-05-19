<?php 
include_once "./inicializacion.php";
$rol=$_POST['rol'];
$id=$_POST['id'];

$sql="
    INSERT INTO USUARIOS__ROLES(id_usuario, id_rol)
    VALUES ('{$id}','{$rol}')
    ";

sql($sql);



$m="Rol asignado con exito";
ir("mensaje.php?m=$m&d=usuarios_roles.php?id=$id");

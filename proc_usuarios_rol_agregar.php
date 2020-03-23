<?php 
include_once "./inicializacion.php";
$roles=$_POST['rol'];
$n_roles=count($roles);
$id=$_POST['id'];



for ($i=0; $i <$n_roles ; $i++){ 
    # code...
    $rol=$roles[$i];
    $sql="
        INSERT INTO USUARIOS__ROLES(id_usuario, id_rol)
        VALUES ('{$id}','{$rol}')
        ";

    sql($sql);

}

$m="Rol agragado con exito";
ir("mensaje.php?m=$m&d=usuarios_datos.php?id=$id");

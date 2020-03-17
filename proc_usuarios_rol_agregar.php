<?php 
include_once "./inicializacion.php";
$roles=$_POST['rol'];
$n_roles=count($roles);
$id=$_POST['id'];



for ($i=0; $i <$n_roles ; $i++){ 
    # code...
    $rol=$roles[$i];
    $sql="
        INSERT INTO usuarios_tipos(id_usuario, id_rol, id_personas)
        VALUES ('{$id}','{$rol}','{$id}')
        ";

    sql($sql);

}

$m="Rol agragado con exito";
ir("mensaje.php?m=$m&d=usuarios_datos.php?id=$id");

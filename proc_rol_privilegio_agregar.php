<?php 
require_once APP."/modulos/config/inicializacion.php";

$privilegios=$_POST['privilegio'];
$n_privilegios=count($privilegios);
$id=$_POST['id'];



for ($i=0; $i <$n_privilegios ; $i++) { 
    # code...
    $privilegio=$privilegios[$i];
    $sql="
        INSERT INTO ROLES__PRIVILEGIOS(id_rol, id_privilegio)
        VALUES ('{$id}','{$privilegio}')
    ";
    sql($sql);
}

$m="privilegios agragados con exito";
ir("mensaje.php?m=$m&d=roles_datos.php?id=$id");


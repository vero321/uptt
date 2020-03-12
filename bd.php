<?php
/**
 * Este archivo tiene las funciones que se cargan por defecto
 * cuando se carga el acceso a la bd
 *
 * */
$m = new mysqli(
    $config['bd']['host'],
    $config['bd']['login'],
    $config['bd']['clave'],
    $config['bd']['bd']
);

/* chequeo de conexión */
if ($m->connect_errno) {
    printf("Falló conexión: %s\n", $mysqli->connect_error);
    exit();
}

$m->set_charset('utf8');

##################################### Funciones generales

define("R2_REGEX","1");
/**
Funcion para limpiar cualquier tipo de texto basura
en algún campo, evitando inyecciones de codigo
Los parametros son:
*Texto: Es el texto ingresado
*Tipo: Uno de los siguientes: email
*Expresión Regular
*Regex: Si el parametro tipo es una E.R, entonces este campo
debe tener el valor R2_REGEX
*/
function limpiar_texto($texto,$tipo,$regex=NULL)
{
    $exprs = [
        "email"=>"[a-zA-Z\d._%\+\-]+@[A-Za-z\d.\-]+\.[A-Za-z]{2,64}",
        "numero"=>"[\d]+",
        "buscar"=>"[a-zA-Z\dáéíóúÁÉÍÓÚÑñÜüöÖÄäËëÏï\s]+",
    ];

    if ($regex==R2_REGEX)
    {
        $patron = $tipo;
    }  else {
        $patron = $exprs[$tipo];
    }
    
    preg_match_all('/'.$patron.'/', $texto, $salida);
    $texto =trim ( join ($salida[0] ));

    return $texto;
}


function sql($sql){
	global $m;
	$resultado = $m->query($sql);
    if ( $resultado === FALSE ) {
        printf( "(repo) %s\n", $m->error );
        exit;
    }
    return $resultado;
}

function sqlerror($sql,$error){
    return "<html><head></head><body><ul>"
   ."<li>Instruccion SQL:<br /><pre>$sql</pre></li>"
   ."<li>Error SQL: <font color='red'>$error</font></li>"
   ."</ul></body></html>";
}

function sql2array($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=array();
    while( $temp=$res->fetch_array(MYSQLI_ASSOC) ) {
       $r[]=$temp;
    }
    return $r;
}

function sql2clavevalor($tabla, $c1,$c2, $condicion=1 ){
	global $m;
    $sql= "
        SELECT
            $c1 AS clave,
            $c2 AS valor
        FROM $tabla
        WHERE
            $condicion
        ";
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=array();
    while( $temp=$res->fetch_array(MYSQLI_ASSOC) ) {
       $r[$temp['clave']]=$temp['valor'];
    }
    return $r;
}

function sql2row($sql) {
	global $m;
    if ( !$res=$m->query($sql) ) {
        echo sqlerror( $sql,$m->error );
        exit;
    }
    return $res->fetch_array(MYSQLI_ASSOC);
}

function sql2value($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
        echo sqlerror( $sql,$m->error );
        exit;
    }
    $p=$res->fetch_array(MYSQLI_NUM);
    return $p[0];
}

function sql2options($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=array();
    while( $l=$res->fetch_array(MYSQLI_NUM) ) {
       $r[$l[0]]=$l[1];;
    }
    return $r;
}

function sql2ids($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=[];
    while( $l=$res->fetch_array(MYSQLI_NUM) ) {
       $r[]=$l[0];;
    }
    return $r;
}


########################################### Funciones de la base de datos
function bd_usuarios_hash($login)
{
    $sql= "
        SELECT clave
        FROM usuarios
        WHERE id LIKE '{$login}' or correo LIKE '{$login}'";
    
    return sql2value($sql);
}


function bd_usuarios_contar(){
    return sql2value("SELECT COUNT(*) FROM usuarios");
}

function bd_nucleos_contar(){
    return sql2value("SELECT COUNT(*) FROM nucleos");
}

function bd_pnf_contar(){
    return sql2value("SELECT COUNT(*) FROM pnf");
}


function bd_personas_contar($criterio='1')
{

}


function bd_usuarios_datos($login=NULL)
{
    if ($login!=NULL) {
        $sql="
            SELECT usuarios.id, correo, clave, clave_temp, plazo, jerarquia, id_tipo, id_rol, rol, privilegios, nivel
            FROM usuarios, roles
            WHERE (usuarios.id LIKE '{$login}' or correo LIKE '{$login}') && (roles.id = id_rol)";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT usuarios.id, correo, clave, clave_temp, plazo, jerarquia, id_tipo, id_rol, rol, privilegios, nivel
            FROM usuarios, roles
            WHERE id_rol = roles.id 
            ORDER BY usuarios.id ASC";
        $salida = sql2array($sql);
    }
    return $salida;
}

function paginar($totalpaginas,$rango,$pagina_actual=1)
    {
        $i       = 0;
        $rgo     = $rango;
        $paginas = array();

        do{
            $paginas[] = $i;
            $i+=$rgo;
        }while ( $i < $totalpaginas);

        return $paginas;
    }

function bd_usuarios_datos2($inicio, $cantidad, $orden='id', $nivel)
{
return sql2array("SELECT usuarios.id, correo, id_rol, rol, nivel FROM usuarios, roles WHERE (id_rol = roles.id) && (nivel <= '{$nivel}') 
    ORDER BY $orden ASC#
    LIMIT $inicio,$cantidad
    ");
}

function bd_usuarios_datos3($campos, $palabras,$cantidad){
$miscampos = explode(',', $campos);
foreach ($miscampos as $key => $value)
{
    $miscampos[$key] .= " LIKE '%{$palabras}%'";
}

$condicion = implode(' OR ', $miscampos);
return sql2array("SELECT usuarios.id, correo, id_rol, rol, nivel FROM usuarios, roles
    WHERE ($condicion )&& (id_rol = roles.id) && (nivel <= '{$nivel}') 
        LIMIT $cantidad
    ");
}



function bd_usuarios_eliminar($d)
{
    $sql = "
        DELETE FROM usuarios
        WHERE id = '{$d['id']}'
        ";
    sql($sql);
    return $d['id'];
}


function bd_nucleos_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM nucleos
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM nucleos
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_nucleos_agregar($nucleos)
{
    $sql="
        INSERT INTO nucleos (nombre_largo, nombre_corto)
        VALUES ('{$nucleos['nombre_largo']}','{$nucleos['nombre_corto']}')";
    sql($sql);
    return "{$nucleos['id']}";

}

function bd_nucleos_modicar($nucleos)
{
    $sql = "
        UPDATE nucleos SET
            id = '{$nucleos['id']}',
            nombre_largo = '{$nucleos['nombre_largo']}',
            nombre_corto = '{$nucleos['nombre_corto']}'
        WHERE
            id = '{$nucleos['id']}'
    ";
    sql($sql);
    return $nombre;
}

function bd_nucleos_eliminar($id)
{
    $sql = "
        DELETE FROM nucleos
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $nucleos['id'];
}


function bd_pnf_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM pnf
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM pnf
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}


function bd_pnf_agregar($pnf)
{
    $sql="
        INSERT INTO pnf (nombre_largo, nombre_corto)
        VALUES ('{$pnf['nombre_largo']}','{$pnf['nombre_corto']}')";
    sql($sql);
    return "{$pnf['id']}";

}

function bd_pnf_eliminar($id)
{
    $sql = "
        DELETE FROM pnf
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $pnf['id'];
}

function bd_pnf_modicar($pnf)
{
    $sql = "
        UPDATE pnf SET
            id = '{$pnf['id']}',
            nombre_largo = '{$pnf['nombre_largo']}',
            nombre_corto = '{$pnf['nombre_corto']}'
        WHERE
            id = '{$pnf['id']}'
    ";
    sql($sql);
    return $nombre;
}

function bd_roles_datos($login=NULL)
{
    if ($login!=NULL) {
        $sql="
            SELECT *
            FROM roles
            WHERE id LIKE '{$login}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM roles
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_tipo_datos($login=NULL)
{
    if ($login!=NULL) {
        $sql="
            SELECT *
            FROM roles
            WHERE id LIKE '{$login}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM roles
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}



function bd_usuarios_registrar($usuario)
{

    $sql="
        INSERT INTO usuarios(id, clave, correo, id_rol)
        VALUES ('{$usuario['id']}','{$usuario['hash']}','{$usuario['correo']}','{$usuario['rol']}')
        ";
    sql($sql);
    return "{$usuario['id']}";
}


function bd_usuarios_modificar($usuario)
{
    $sql = "
        UPDATE usuarios SET
            id = '{$id}',
            id = '{$usuario['id_new']}',
            correo = '{$usuario['correo']}',
            id_rol = '{$usuario['rol']}'
        WHERE
            id = '{$usuario['id']}'
    ";
    sql($sql);
    return $d['id'];
}
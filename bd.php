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
function bd_usuarios_hash($login){
    $sql= "
        SELECT clave
        FROM USUARIOS
        WHERE id LIKE '{$login}' or correo LIKE '{$login}'";
    
    return sql2value($sql);
}
function bd_usuarios_hash_temporal($login){
    $sql= "
        SELECT clave_temporal, plazo
        FROM USUARIOS
        WHERE id LIKE '{$login}' or correo LIKE '{$login}'";
    
    return sql2row($sql);
}



function bd_usuarios_datos($login=NULL){
    if ($login!=NULL) {
        $sql="
            SELECT *
            FROM USUARIOS
            WHERE id LIKE '{$login}'or correo LIKE '{$login}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM USUARIOS
            ORDER BY USUARIOS.id ASC";
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

function bd_usuarios_datos2($inicio, $cantidad, $verificar){

    if (in_array("USUA_V1000",$verificar) == TRUE) {
        # Este es el caso de los usuarios que necesitan ver todos los usuarios
        $resultado=sql2array("SELECT id, correo
            FROM USUARIOS
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
    }elseif (in_array("USUA_V900", $verificar)) {
        # te es el caso de los usuarios que necesitan ver todos los usuarios execto los de nivel 1000
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 1000 and nivel = 900 and USUARIOS.id = id_usuario and id_rol = ROLES.id
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            
        }
/*
    switch ($nivel) {
        case 1000:
            # Este es el caso de los usuarios que necesitan ver todos los usuarios
            $resultado=sql2array("SELECT id, correo
            FROM USUARIOS
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        case 900:
            # Este es el caso de los usuarios que necesitan ver todos los usuarios execto los de nivel 1000
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel != 1000 and USUARIOS.id = id_usuario and id_rol = ROLES.id
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        case 800:
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 700
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo
            FROM USUARIOS, ROLES, USUARIOS__ROLES, NUCLEOS, PNF
            WHERE nivel = 700 and USUARIOS.id = id_usuario and id_rol = ROLES.id and USUARIOS__ROLES.id_nucleo = NUCLEOS.id and USUARIOS__ROLES.id_pnf = PNF.id
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        case 700:
            # Este es el caso de los usuarios que necesitan verlos usuarios nivel 600, 500
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE (nivel = 600 or nivel =500) and USUARIOS.id = id_usuario and id_rol = ROLES.id
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        case 600:
            # Aun no definido
            break;
        case 500:
            # Este es el caso de los usuarios que necesitan ver  todos los usuarios de nivel 400, 300 y 200
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE (nivel = 400 or nivel =300 or nivel = 200 ) and USUARIOS.id = id_usuario and id_rol = ROLES.id
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        case 400:
             # Aun no definido
        break;
        case 300:
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 700
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 200 and USUARIOS.id = id_usuario and id_rol = ROLES.id
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        case 200:
             # Aun no definido
        break;
        case 100:
             # Aun no definido
        break;
        default:
            # code...
            break;
    }
*/
     return $resultado;
}

function bd_usuarios_datos3($campos, $palabras,$cantidad,$nivel){
    $miscampos = explode(',', $campos);
    foreach ($miscampos as $key => $value)
    {
        $miscampos[$key] .= " LIKE '%{$palabras}%'";
    }
    $condicion = implode(' OR ', $miscampos);

     $resultado=sql2array("SELECT id, correo FROM USUARIOS
        WHERE ($condicion )
            LIMIT $cantidad
        ");
/*    switch ($nivel) {
        case 1000:
            # Este es el caso de los usuarios que necesitan ver todos los usuarios
             $resultado=sql2array("SELECT id, correo FROM USUARIOS
                WHERE ($condicion )
                    LIMIT $cantidad
                ");
            break;
        case 900:
            # Este es el caso de los usuarios que necesitan ver todos los usuarios execto los de nivel 1000
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel != 1000 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");

            break;
        case 800:
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 700
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 700 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");

            break;
        case 700:
            # Este es el caso de los usuarios que necesitan verlos usuarios nivel 600, 500
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 600 or nivel =500) and (USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
            break;
        case 600:
            # Aun no definido
            break;
        case 500:
            # Este es el caso de los usuarios que necesitan ver  todos los usuarios de nivel 400, 300 y 200
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 400 or nivel =300 or nivel = 200) and (USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
            break;
        case 400:
             # Aun no definido
        break;
        case 300:
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 700
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 200 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
            break;
        case 200:
             # Aun no definido
        break;
        case 100:
             # Aun no definido
        break;
        default:
            # code...
            break;
    }

*/
 return $resultado;
}


function bd_usuarios_eliminar($id)
{
    $sql = "
        DELETE FROM USUARIOS
        WHERE id = '{$id}'
        ";
    sql($sql);
    return $id;
}


function bd_usuarios_modificar($usuario)
{
    $sql = "
        UPDATE USUARIOS SET
            correo = '{$usuario['correo']}'
        WHERE id = '{$usuario['id']}' 
            ";
    sql($sql);
    return $d['id'];
}


function bd_usuarios_modificar_clave($d)
{
    $id = $d[0];
    $hash = $d[1];
    $sql = "
        UPDATE USUARIOS SET
            clave = '{$hash}'
        WHERE
            id = '{$id}'
    ";
    sql($sql);
    return $id;
}



function bd_usuarios_registrar($usuario,$n_roles,$roles){   
    $sql1="
        INSERT INTO USUARIOS(id, clave, correo)
        VALUES ('{$usuario['id']}','{$usuario['hash']}','{$usuario['correo']}')
        ";
    sql($sql1);

    $consulta="SELECT id FROM PERSONAS WHERE id ='{$usuario['id']}'";
    $verificar= sql($consulta);

    if ($verificar < 1){
        $sql2="
            INSERT INTO PERSONAS(id)
            VALUES('{$usuario['id']}');
             ";
    sql($sql2);
    }

    for ($i=0; $i <$n_roles ; $i++) { 
        # code...
        $rol=$roles[$i];
        $sql="
            INSERT INTO USUARIOS__ROLES(id_usuario, id_rol)
            VALUES ('{$usuario['id']}','{$rol}')
        ";
        sql($sql);
    }
    return "{$usuario['id']}";

}


function bd_usuarios_roles_datos($id){

    $sql="
            SELECT id_rol, id_nucleo, id_pnf, rol, nivel
            FROM USUARIOS__ROLES, ROLES 
            WHERE id_usuario LIKE '{$id}' && id_rol LIKE ROLES.id  ";
        $salida = sql2array($sql);
    return $salida;
}

function bd_usuarios_privilegios_datos($id){

    $sql="
            SELECT id_rol, id_privilegio, privilegio, rol, nivel
            FROM ROLES__PRIVILEGIOS, ROLES 
            WHERE id_rol LIKE '{$id}' && id_privilegio LIKE PRIVILEGIOS.id  ";
        $salida = sql2array($sql);
    return $salida;
}


function bd_crear_temp($correo){
    $n_aleatorio=rand(100000,999999);
    $hash=password_hash($n_aleatorio, PASSWORD_DEFAULT);
    $diaSiguiente = time() + (1 * 24 * 60 * 60);
    $plazo=date('Y-m-d-H-i', $diaSiguiente);
    $sql = "
        UPDATE USUARIOS SET
        clave_temporal = '{$hash}',
        plazo = '{$plazo}'
        WHERE correo = '{$correo}' 
        ";
    sql($sql);
    return $n_aleatorio;
}

#####Funciones para los Nucleos



function bd_nucleos_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM NUCLEOS
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM NUCLEOS
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_nucleos_agregar($nucleos)
{
    $sql="
        INSERT INTO NUCLEOS (nombre_largo, nombre_corto)
        VALUES ('{$nucleos['nombre_largo']}','{$nucleos['nombre_corto']}')";
    sql($sql);
    return "{$nucleos['id']}";

}

function bd_nucleos_modicar($nucleos)
{
    $sql = "
        UPDATE NUCLEOS SET
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
        DELETE FROM NUCLEOS
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $nucleos['id'];
}

###########################Funciones PNF

function bd_pnf_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM PNF
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM PNF
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}


function bd_pnf_agregar($pnf)
{
    $sql="
        INSERT INTO PNF (nombre_largo, nombre_corto)
        VALUES ('{$pnf['nombre_largo']}','{$pnf['nombre_corto']}')";
    sql($sql);
    return "{$pnf['id']}";

}

function bd_pnf_eliminar($id)
{
    $sql = "
        DELETE FROM PNF
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $pnf['id'];
}

function bd_pnf_modicar($pnf)
{
    $sql = "
        UPDATE PNF SET
            id = '{$pnf['id']}',
            nombre_largo = '{$pnf['nombre_largo']}',
            nombre_corto = '{$pnf['nombre_corto']}'
        WHERE
            id = '{$pnf['id']}'
    ";
    sql($sql);
    return $nombre;
}

############################## Funciones Roles

function bd_roles_datos($id=NULL){
    $nivel=$_SESSION['r'][$_SESSION['numero']]['nivel'];
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM ROLES
            WHERE id LIKE '{$id}'

            ";
        $salida = sql2row($sql);
    } else {
        switch ($nivel) {
            default:
                # por defecto
                 $sql="
                SELECT *
                FROM ROLES
                ";
                $salida = sql2array($sql);
                break;
            case 900:
                # ve todos los roles exepto el 1000 y el 900
                $sql="
                SELECT *
                FROM ROLES
                WHERE nivel != 1000 and nivel != 900
                ";
                $salida = sql2array($sql);
                break;
            case 800:
                # solo ve los roles de nivel 700
                $sql="
                SELECT *
                FROM ROLES
                WHERE nivel = 700
                ";
                $salida = sql2array($sql);
                break;
            case 700:
                # ve los roles de nivel 600 y 500
                $sql="
                SELECT *
                FROM ROLES
                WHERE nivel = 600 or nivel = 500
                ";
                $salida = sql2array($sql);
                break;
            case 600:
                # Aun no definido
                break;
            case 500:
                # ve los roles de nivel 400, 300 y 00
                $sql="
                SELECT *
                FROM ROLES
                WHERE nivel = 400 or nivel = 300 or nivel = 200
                ";
                $salida = sql2array($sql);
                break;
            case 400:
                # Aun no definido
                break;
            case 300:
                # ve los roles de nivel 400, 300 y 00
                $sql="
                SELECT *
                FROM ROLES
                WHERE nivel = 200
                ";
                $salida = sql2array($sql);
                break;
        case 200:
                # Aun no definido
                break;
        case 100:
                # Aun no definido
                break;
            
        }
       
    }
    return $salida;
}

function contar_valores($a,$buscado)
 {
  if(!is_array($a)) return NULL;
  $i=0;
  foreach($a as $v)
   if($buscado===$v)
    $i++;
  return $i;
 }



function bd_eliminar_rol_usuario($id_usuario,$id_rol=NULL){ 
    if ($id_rol != NULL) {
        #un solo rol
        $sql = "
            DELETE FROM USUARIOS__ROLES
            WHERE id_usuario = '{$id_usuario}' && id_rol = '{$id_rol}'
            ";
        sql($sql);
     }else{
        # todos los roles del usuario
         $sql = "
            DELETE FROM USUARIOS__ROLES
            WHERE id_usuario = '{$id_usuario}'
            ";
        sql($sql);
     }

}



function bd_privilegios_datos($id=NULL){
    if ($id!=NULL){
        $sql="
        SELECT *
        FROM PRIVILEGIOS
        WHERE id LIKE '{$id}'
        ";
       $salida= sql2row($sql);
    }else
    {
        $sql="
            SELECT *
            FROM PRIVILEGIOS
        ";
        $salida= sql2array($sql);
    }
        return $salida;
}

function bd_roles_argregar($rol,$n_privilegios,$privilegios){
    $unico=uniqid();
    $sql1="
        INSERT INTO ROLES(id, rol, nivel)
        VALUES ('{$unico}','{$rol['rol']}','{$rol['nivel']}')
        ";
    sql($sql1);

    for ($i=0; $i <$n_privilegios ; $i++) { 
        # code...
        $privilegio=$privilegios[$i];
        $sql="
            INSERT INTO ROLES__PRIVILEGIOS(id_rol, id_privilegio)
            VALUES ('{$unico}','{$privilegio}')
        ";
        sql($sql);
    }
    return "{$usuario['id']}";
}

function bd_roles_modificar($id){
    $sql = "
        UPDATE ROLES SET
            rol = '{$_POST['rol']}',
            nivel = '{$_POST['nivel']}'
        WHERE id = '{$_POST['id']}' 
            ";
    sql($sql);
    return $d['id'];
}

function bd_roles__privilegios($id){
    $sql="
        SELECT id_rol, direccion, privilegio, nombre, icono, codigo, id_privilegio
        FROM ROLES__PRIVILEGIOS, PRIVILEGIOS
        WHERE id_rol LIKE '{$id}' && id_privilegio LIKE PRIVILEGIOS.id
    ";
    $salida=sql2array($sql);

    return $salida;
}


function bd_eliminar_privilegios_rol($id_rol,$id_privilegio=NULL){ 
    if ($id_privilegio != NULL) {
        #un solo rol
        $sql = "
            DELETE FROM ROLES__PRIVILEGIOS
            WHERE id_rol = '{$id_rol}' && id_privilegio = '{$id_privilegio}'
            ";
        sql($sql);
     }else{
        # todos los roles del usuario
         $sql = "
            DELETE FROM ROLES__PRIVILEGIOS
            WHERE id_rol = '{$id_rol}'
            ";
        sql($sql);
     }

}

function bd_roles_eliminar($id){
    $sql = "
        DELETE FROM ROLES
        WHERE id = '{$id}'
        ";
    sql($sql);
    return $id;
}



############################# Funciones Personas


function bd_personas_datos($login=NULL)
{
    if ($login!=NULL){
        $sql="
                SELECT *
                FROM  PERSONAS 
                WHERE id LIKE '{$login}'";
            $salida = sql2array($sql);
    }else
    {
        $sql="
            SELECT *
            FROM PERSONAS
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_personas_modicar($personas)
{
    $sql = "
        UPDATE PERSONAS SET
            id = '{$personas['id']}',
            nombre = '{$personas['nombre']}',
            apellido = '{$personas['apellido']}'
        WHERE
            id = '{$personas['id']}'
    ";
    sql($sql);
    return $personas;
}



#################Contadores



function bd_usuarios_contar(){
    return sql2value("SELECT COUNT(*) FROM USUARIOS");
}

function bd_centros_contar(){
    return sql2value("SELECT COUNT(*) FROM CENTROS_DE_INVESTIGACION");
}

function bd_lineas_contar(){
    return sql2value("SELECT COUNT(*) FROM LINEAS_DE_INVESTIGACION");
}

function bd_nucleos_contar(){
    return sql2value("SELECT COUNT(*) FROM NUCLEOS");
}

function bd_pnf_contar(){
    return sql2value("SELECT COUNT(*) FROM PNF");
}

function bd_roles_contar(){
    return sql2value("SELECT COUNT(*) FROM ROLES");
}

function bd_personas_contar($criterio='1')
{

}

######################## Funciones Centros de Investigación

function bd_centros_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM CENTROS_DE_INVESTIGACION
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM CENTROS_DE_INVESTIGACION
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_centros_agregar($centros)
{
    $sql="
        INSERT INTO CENTROS_DE_INVESTIGACION (nombre)
        VALUES ('{$centros['nombre']}')";
    sql($sql);
    return "{$centros['id']}";

}

function bd_centros_eliminar($id)
{
    $sql = "
        DELETE FROM CENTROS_DE_INVESTIGACION
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $centros['id'];
}


function bd_centros_modicar($centros)
{
    $sql = "
        UPDATE CENTROS_DE_INVESTIGACION SET
            id = '{$centros['id']}',
            nombre = '{$centros['nombre']}'
        WHERE
            id = '{$centros['id']}'
    ";
    sql($sql);
    return $nombre;
}


######################## Funciones Líneas de Investigación

function bd_lineas_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM LINEAS_DE_INVESTIGACION
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM LINEAS_DE_INVESTIGACION
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_lineas_agregar($lineas)
{
    $sql="
        INSERT INTO LINEAS_DE_INVESTIGACION (nombre)
        VALUES ('{$lineas['nombre']}')";
    sql($sql);
    return "{$lineas['id']}";

}

function bd_lineas_eliminar($id)
{
    $sql = "
        DELETE FROM LINEAS_DE_INVESTIGACION
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $lineas['id'];
}



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


######Funcion para buscar los datos de la localidades

function bd_datos_ubicacion($parroquia_id){
    $salida=[];
    $sql="SELECT tabla, nombre, localidad_id FROM UBICACIONES 
            WHERE id = {$parroquia_id} 
            AND tabla 
            LIKE 'parroquia'
            "; 
    $salida['parroquia'] = sql2row($sql);

    $sql="SELECT tabla, nombre, localidad_id 
            FROM UBICACIONES 
            WHERE id = {$salida['parroquia']['localidad_id']} 
            AND tabla 
            LIKE 'municipio' 
            ";
    $salida['municipio'] = sql2row($sql);

    $sql="SELECT tabla, nombre, localidad_id 
            FROM UBICACIONES 
            WHERE id = {$salida['municipio']['localidad_id']} 
            AND tabla 
            LIKE 'estado' 
            ";
    $salida['estado'] = sql2row($sql);

    return $salida;
}

#funcion para separar las parroquias segun el municipio y el estado
function bd_ubicaciones($tabla, $id=1) 
{
    
    return sql2array("SELECT id, nombre FROM UBICACIONES WHERE tabla LIKE '{$tabla}' AND localidad_id = '{$id}' ORDER BY nombre ASC");
}

function bd_ubicaciones2($id){
    $dato = sql2row("SELECT nombre FROM UBICACIONES WHERE id = '{$id}' ");
    return $dato['nombre'];
}



#####################################


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

function bd_usuarios_datos($login=NULL, $rol=NULL, $nucleo=NULL, $pnf=NULL, $nivel=NULL){
    if ($login!=NULL) {
        $sql="
            SELECT *
            FROM USUARIOS
            WHERE id LIKE '{$login}'or correo LIKE '{$login}'";
        $salida = sql2row($sql);
    } else {
            switch ($nivel) {
            default:
                # code...
                $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            case 1000:
                # Este es el caso de los usuarios que necesitan ver todos los usuarios
                $salida=sql2array("SELECT id, correo
                FROM USUARIOS
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            case 900:
                # Aca se muestran todos los usuarios con el rol que estemos resiviendo de un mismo nucleo
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            case "800":
                # Este es el caso de los usuarios que necesitan ver los usuarios nivel 800
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            
            case "700":
                # Este es el caso de los usuarios que necesitan verlos usuarios nivel 700
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE nivel = 700 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            case "600":
                # Este es el caso de los usuarios que necesitan ver los usuarios nivel 600
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE nivel = 600 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            case "500":
                # Este es el caso de los usuarios que necesitan ver  todos los usuarios de nivel 500
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE nivel = 500 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
                break;
            case "400":
                 # Ver los usuarios de nivel 400
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE nivel = 400 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
                break;
            case "300":
                # Este es el caso de los usuarios que necesitan ver los usuarios nivel 300
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE nivel = 300 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            case "200":
                # Este es el caso de los usuarios que necesitan ver los usuarios nivel 200
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES
                WHERE nivel = 200 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
            case "100":
                # Este es el caso de los usuarios que necesitan ver los usuarios nivel 100
                $salida=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
                FROM USUARIOS, ROLES, USUARIOS__ROLES, NUCLEOS, PNF
                WHERE nivel = 100 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
                ORDER BY USUARIOS.id ASC#
                ");
            break;
        }
    }
    return $salida;
}



function    bd_usuarios_datos1($campos, $palabras){
    # Esta Funcion es la funcion de buscar usuarios 

    $miscampos = explode(',', $campos);
    foreach ($miscampos as $key => $value)
    {
        $miscampos[$key] .= " LIKE '%{$palabras}%'";
    }
    $condicion = implode(' OR ', $miscampos);
    $sql="
    SELECT DISTINCT USUARIOS.id, correo FROM USUARIOS, ROLES, USUARIOS__ROLES
    WHERE ($condicion )
    ";
    $resultado=sql2array($sql);
        

 return $resultado;
}


function bd_usuarios_eliminar($id, $nivel=NULL)
{
    if ($nivel=1000) 
    {
        $sql = "
        DELETE FROM USUARIOS
        WHERE id = '{$id}'
        ";
    sql($sql);
    return $id;
    } 
    else 
    {
        $sql = "
        DELETE FROM USUARIOS__ROLES 
        WHERE USUARIOS__ROLES.id = '{$id}'
        
        ";
    sql($sql);
    return $id;
    }
    
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

function bd_usuarios_cambiar_foto_perfil($imagen) {
    $id=$id = $_SESSION['u']['id'];
    $sql0 = "
        UPDATE USUARIOS SET
            foto_perfil = '{$imagen}'
        WHERE
            id = '{$id}'
        ";
    sql($sql0);
    $sql1 = "
        UPDATE PERSONAS SET
            foto_perfil = '{$imagen}'
        WHERE
            id = '{$id}'
        ";
    sql($sql1);

    return $id;
}



function bd_usuarios_registrar($usuario){ 

    $sql1="
        INSERT INTO USUARIOS(id, clave, correo)
        VALUES ('{$usuario['id']}','{$usuario['hash']}','{$usuario['correo']}')
        ";
    sql($sql1);

    $consulta="SELECT id FROM PERSONAS WHERE id ='{$usuario['id']}'";
    $verificar= sql2row($consulta);

    if ($verificar < 1){
        $sql2="
            INSERT INTO PERSONAS(id)
            VALUES('{$usuario['id']}');
             ";
    sql($sql2);
    }
    
    return "{$usuario['id']}";

}


function bd_usuarios_roles_datos($id){

    $sql="
            SELECT USUARIOS__ROLES.id, id_rol, id_nucleo, id_pnf, rol, nivel
            FROM USUARIOS__ROLES, ROLES 
            WHERE id_usuario LIKE '{$id}' && id_rol LIKE ROLES.id  
            ORDER BY rol ASC#
            ";
        $salida = sql2array($sql);
    return $salida;
}

function bd_usuarios_privilegios_datos($id){

    $sql="
            SELECT id_rol, id_privilegio, privilegio, rol, nivel
            FROM ROLES__PRIVILEGIOS, ROLES 
            WHERE id_rol LIKE '{$id}' && id_privilegio LIKE PRIVILEGIOS.id  
        ";
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
            ORDER BY NUCLEOS . nombre_corto ASC
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

function bd_nucleos_agregar_dependencia($nucleos){
    $sql="
        INSERT INTO NUCLEOS (nombre_largo, nombre_corto, id_nucleo)
        VALUES ('{$nucleos['nombre_largo']}','{$nucleos['nombre_corto']}', '{$nucleos['extension']}')";
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
function bd_nucleo_responsable($id_nucleo,$id_rol,$id_usuario){
    $sql0="
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}')
        ";
    sql($sql0);
    $sql1="
        UPDATE NUCLEOS SET
        responsable = '{$id_usuario}'
        WHERE id = '{$id_nucleo}'
    ";
    sql($sql1);
}
function bd_nucleo_responsable_cambiar($id_nucleo, $id_rol, $id_usuario){
    $sql = "
        SELECT * FROM USUARIOS__ROLES
        WHERE id_usuario = '{$id_usuario}' AND id_rol = '{$id_rol}' AND id_nucleo = '{$id_nucleo}'
        ";
    $rol=sql2row($sql);
    $sql1 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id = '{$rol['id']}'
        ";
    sql($sql1);
    $sql2="
        UPDATE NUCLEOS SET
        responsable = NULL
        WHERE id = $id_nucleo
    ";
    sql($sql2);
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

function bd_nucleos_pnf_datos($id){
    $sql="
    SELECT NUCLEOS__PNF.id, id_nucleo, id_pnf, nombre_corto, nombre_largo, responsable
    FROM NUCLEOS__PNF, PNF
    WHERE id_nucleo = '{$id}' and id_pnf = PNF.id
    ";
    $salida = sql2array($sql);
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


######### Funciones PNF_Nucleo

function bd_pnf_nucleo_agregar($pnf){
    #contamos las id de los para registrar cada una en la BD
    $id_pnf = $pnf['pnf'];
    $n = count($id_pnf);
    for ($i=0; $i < $n; $i++) { 
        # code...
        $sql="
        INSERT INTO NUCLEOS__PNF (id_nucleo, id_pnf)
        VALUES ('{$pnf['id_nucleo']}','{$id_pnf[$i]}')
        ";
        sql($sql);
    }
    return "1";

}

function bd_pnf_nucleo_eliminar($id){
    $sql = "
        DELETE FROM NUCLEOS__PNF
        WHERE id = '{$id}'
        ";
    sql($sql);
    return $id;
}

function bd_pnf_nucleo_responsable($id_usuario, $id_rol, $id_nucleo, $id_pnf, $id_relacion){
        $sql0="
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo,id_pnf)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}','{$id_pnf}')
        ";
    sql($sql0);
    $sql1="
        UPDATE NUCLEOS__PNF SET
        responsable = '{$id_usuario}'
        WHERE id = $id_relacion
    ";
    sql($sql1);

}

function bd_pnf_nucleo_responsable_cambiar($id_usuario, $id_rol,$id_nucleo, $id_pnf, $id_relacion){
      $sql = "
        SELECT * FROM USUARIOS__ROLES
        WHERE id_usuario = '{$id_usuario}' AND id_rol = '{$id_rol}' AND id_nucleo = '{$id_nucleo}' AND id_pnf = '{$id_pnf}'
        ";
    $rol=sql2row($sql);
    $sql1 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id = '{$rol['id']}'
        ";
    sql($sql1);
    $sql2="
        UPDATE NUCLEOS__PNF SET
        responsable = NULL
        WHERE id = '{$id_relacion}'
    ";
    sql($sql2);
}

############################## Funciones Roles

function bd_roles_datos($id=NULL){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM ROLES
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
            $sql="
            SELECT *
            FROM ROLES
            ";
            $salida = sql2array($sql);
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



function bd_eliminar_rol_usuario($id=NULL){ 
    if ($id != NULL) {
        #un solo rol
        $sql = "
            DELETE FROM USUARIOS__ROLES
            WHERE id = '{$id}'
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
        FROM PRIVILEGIOS ORDER BY PRIVILEGIOS . privilegio ASC
        WHERE id LIKE '{$id}'
        ";
       $salida= sql2row($sql);
    }else
    {
        $sql="
            SELECT *
            FROM PRIVILEGIOS ORDER BY PRIVILEGIOS . privilegio ASC
        ";
        $salida= sql2array($sql);
    }
        return $salida;
}


function bd_roles_argregar($rol,$n_privilegios,$privilegios){
    $unico=uniqid();# Codigo unico para id del rol 
    # Crea el rol en la tabla ROLES
    $sql0="
        INSERT INTO ROLES(id, rol, nivel)
        VALUES ('{$unico}','{$rol['rol']}','{$rol['nivel']}')
        ";
    sql($sql0);
    # Crea un privilegio para poder ver la lista de todos los usuarios con ese rol
    /*$sql1="
        INSERT INTO PRIVILEGIOS(codigo, privilegio, direccion, nombre, icono)
        VALUES ('{$unico}','Ver lista de {$rol['rol']}','usuario/usuarios.php?5ea6fd8de7329={$unico}','{$rol['rol']}','fa fa-users')
    ";
    sql($sql1);
    */
    # Guarda los privilegios pertenecientes a cada rol
    for ($i=0; $i <$n_privilegios ; $i++) { 
        # code...
        $privilegio=$privilegios[$i];
        $sql2="
            INSERT INTO ROLES__PRIVILEGIOS(id_rol, id_privilegio)
            VALUES ('{$unico}','{$privilegio}')
        ";
        sql($sql2);
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

/**
 * Devuelve los privilegios del rol
 * @param  String $id ID del rol al que se le buscarán los privilegios
 * @return Array     Array con todos los privilegios del rol dado
 * @author José <[<email address>]>
 * 
 */
function bd_roles__privilegios($id){
    $sql="
        SELECT 
            a.id id_rol, 
            b.direccion, 
            b.privilegio, 
            b.nombre, 
            b.icono, 
            b.codigo,
            b.id id_privilegio 
        FROM ROLES a, PRIVILEGIOS b 
        WHERE 
            b.id IN (
                SELECT c.id_privilegio 
                FROM ROLES__PRIVILEGIOS c 
                WHERE c.id_rol 
                LIKE '{$id}' 
                AND a.id = c.id_rol
            )
        ORDER BY b.nombre ASC#
    ";

    $salida=sql2array($sql);


    foreach ($salida as &$priv) 
    {
        
    
        switch ($priv['codigo']) 
        {
            case 'NUCL_V':
                $priv['cant']=bd_nucleos_contar();
                break;
            case 'PNF_V':
                $priv['cant']=bd_pnf_contar($_SESSION['r']['0']['id_nucleo']);
                break;
            case 'USUA_V1000':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V900':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V800':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V700':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V600':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V500':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V400':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V300':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V200':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'USUA_V100':
                $priv['cant']=bd_usuarios_contar($_SESSION['r']['0']['nivel']);
                break;
            case 'CENT_V':
                $priv['cant']=bd_centros_contar();
                break;
            case 'LINE_V':
                $priv['cant']=bd_lineas_contar();
                break;
            case 'ROLE_V':
                $priv['cant']=bd_roles_contar();
                break;

            default:
                $priv['cant']= '';
                break;

        }
    }
   
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
    $sql0 = "
        DELETE FROM ROLES
        WHERE id = '{$id}'
        ";
    sql($sql0);

    $sql1 = "
        DELETE FROM PRIVILEGIOS
        WHERE codigo = '{$id}'
    ";
    sql($sql1);

    $sql2 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id_rol = '{$id}'
    ";
    sql($sql2);

    return $id;
}



############################# Funciones Personas


function bd_personas_datos($id=NULL){
    if ($id!=NULL){
        $sql="
                SELECT *
                FROM  PERSONAS 
                WHERE id LIKE '{$id}'
                ";
            $salida = sql2row($sql);
    }else{
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
            apellido = '{$personas['apellido']}',
            telefono = '{$personas['telefono']}',
            texto = '{$personas['texto']}'
        WHERE
            id = '{$personas['id']}'
    ";
    sql($sql);
    return $personas;
}



#################Contadores

function bd_centros_contar(){
    return sql2value("SELECT COUNT(*) FROM CENTROS_DE_INVESTIGACION");
}

function bd_lineas_contar(){
    return sql2value("SELECT COUNT(*) FROM LINEAS_DE_INVESTIGACION");
}

function bd_nucleos_contar(){
    return sql2value("SELECT COUNT(*) FROM NUCLEOS");
}

function bd_areas_contar(){
    return sql2value("SELECT COUNT(*) FROM AREAS_PNF");
}

function bd_pnf_contar(){
    return sql2value("SELECT COUNT(*) FROM PNF");
}

function bd_propuesta_contar_equipo($id, $status){
    return sql2value("SELECT COUNT(*) FROM PROPUESTAS WHERE id_equipo = {$id} and status = '{$status}'");
}

function bd_trayectos_contar(){
    return sql2value("SELECT COUNT(*) FROM TRAYECTOS");
}

/*function bd_pnf_nucleo_contar($nucleo_id=NULL){
    if ($nucleo_id==NULL) 
    {
        return sql2value("SELECT COUNT(*) FROM NUCLEOS__PNF");
    } 
    else 
    {
        return sql2value("SELECT COUNT(*) FROM NUCLEOS__PNF WHERE id_nucleo = $nucleo_id");
    }
    
}*/

function bd_usuarios_contar($nivel){
    if ($nivel==1000) 
    {
        return sql2value("SELECT COUNT(*) FROM USUARIOS");
    } 
    else 
    {
       return sql2value("SELECT COUNT(*) FROM USUARIOS WHERE id = '{$nivel}'"); 
    }

    
    
}

function bd_roles_contar(){
    return sql2value("SELECT COUNT(*) FROM ROLES");
}

function bd_personas_contar($criterio='1')
{

}

function bd_lider_contar()
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

function bd_lineas_modicar($lineas)
{
    $sql = "
        UPDATE LINEAS_DE_INVESTIGACION SET
            id = '{$lineas['id']}',
            nombre = '{$lineas['nombre']}'
        WHERE
            id = '{$lineas['id']}'
    ";
    sql($sql);
    return $nombre;
}

## Funciones Trayectos

function bd_trayectos_datos($id=NULL){
       if ($id!=NULL) {
        $sql="
            SELECT *
            FROM TRAYECTOS
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM TRAYECTOS
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_trayectos_agregar($trayecto){
    $sql = "INSERT INTO TRAYECTOS (trayecto)
    VALUES ('{$trayecto}')
    ";
    sql($sql);    
}

function bd_trayectos_modificar($id, $trayecto){
    $sql = "
        UPDATE TRAYECTOS SET
            trayecto = '{$trayecto}'
        WHERE
            id = '{$id}'
    ";
    sql($sql);

}

function bd_trayecto_eliminar($id){
    $sql = "
        DELETE FROM TRAYECTOS
        WHERE id = '{$id}'
        ";
    sql($sql);
}

#Funciones trayectos PNF
function bd_trayectos_pnf_datos($id_pnf, $id_nucleo){
    $sql="
    SELECT DISTINCT TRAYECTOS__PNF.id, id_pnf, id_trayecto, id_nucleo, trayecto
    FROM TRAYECTOS__PNF, TRAYECTOS
    WHERE id_pnf = '{$id_pnf}' and TRAYECTOS.id = id_trayecto and id_nucleo = '{$id_nucleo}'
    ";
    $salida = sql2array($sql);
    return $salida;
}

function bd_trayecto_pnf_asignar($trayectos){
    #optenemos los identificadores de nucleo y pnf de cada SESIION
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $i = 0;
    if (isset($id_pnf) == true and isset($id_nucleo) == true) {
        # code...
        foreach ($trayectos as $trayecto) {
            $sql = "INSERT INTO TRAYECTOS__PNF (id_pnf, id_trayecto, id_nucleo)
            VALUES ('{$id_pnf}', '{$trayecto[$i]}', '{$id_nucleo}')
            ";
            sql($sql);
            $i = $i + 1;
        }
        return TRUE;
    }else{
        return FALSE;
    }
    
}

function bd_trayecto_pnf_eliminar($id){
    $sql = "
        DELETE FROM TRAYECTOS__PNF
        WHERE id = '{$id}'
        ";
    sql($sql);
}

function bd_trayecto_pnf_modificar($id, $id_trayecto){
    $sql = "
        UPDATE TRAYECTOS__PNF SET
            id_trayecto = '{$id_trayecto}'
        WHERE
            id = '{$id}'
    ";
    sql($sql);

}

# Funciones secciones

function bd_secciones_datos($id=NULL){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM SECCIONES
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM SECCIONES
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_secciones_trayectos_pnf_nucleo($trayecto, $id_pnf, $id_nucleo){
    $sql="
        SELECT *
        FROM SECCIONES
         WHERE id_trayecto = '{$trayecto}' and id_pnf = '{$id_pnf}' and id_nucleo = '{$id_nucleo}' 
         ";
        $salida = sql2array($sql);
    return $salida;
}



function bd_secciones_profesor($id_profesor, $id_pnf, $id_nucleo){
    $sql="
        SELECT * 
        FROM SECCIONES
        WHERE profesor_proyecto = '{$id_profesor}' AND id_nucleo = '{$id_nucleo}' AND id_pnf = '{$id_pnf}' 
        ";
        $salida = sql2array($sql);
    return $salida;
}

function bd_secciones_agregar($nombre, $id_trayecto, $id_pnf, $id_nucleo){
    $sql = "INSERT INTO SECCIONES (nombre, id_trayecto, id_pnf, id_nucleo)
    VALUES ('{$nombre}', '{$id_trayecto}', '{$id_pnf}', '{$id_nucleo}')
    ";
    sql($sql);    
}

function bd_secciones_eliminar($id){
    $sql = "
        DELETE FROM SECCIONES
        WHERE id = '{$id}'
        ";
    sql($sql);
}

function bd_secciones_modificar($id, $nombre){
    $sql = "
        UPDATE SECCIONES SET
            nombre = '{$nombre}'
        WHERE
            id = '{$id}'
    ";
    sql($sql);
}

function bd_asignar_profesor_proyecto($id_seccion,$id_rol,$id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];


    $sql0= "SELECT *
            FROM USUARIOS__ROLES 
            WHERE
                id_usuario = {$id_usuario} AND 
                id_rol = '{$id_rol}' AND 
                id_nucleo = {$id_nucleo} AND 
                id_pnf = {$id_pnf}
                ";
    $n = sql2array($sql0);
    $numero = count($n);
    
if ($numero < 1) 
{
     $sql0 = "
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo, id_pnf)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}', '{$id_pnf}')
        ";
    sql($sql0);

    $sql1 = " 
        UPDATE SECCIONES SET
            profesor_proyecto = '{$id_usuario}'
        WHERE
            id = '{$id_seccion}'
    ";
    sql($sql1);
}else{
     $sql1 = " 
        UPDATE SECCIONES SET
            profesor_proyecto = '{$id_usuario}'
        WHERE
            id = '{$id_seccion}'
    ";
    sql($sql1);
}
   
}

function bd_profesor_proyecto_cambiar($id_seccion, $id_rol, $id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql = "
        SELECT * FROM USUARIOS__ROLES
        WHERE id_usuario = '{$id_usuario}' AND id_rol = '{$id_rol}' AND id_nucleo = '{$id_nucleo}' and id_pnf = '{$id_pnf}'
        ";
    $rol=sql2row($sql);
    $sql1 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id = '{$rol['id']}'
        ";
    sql($sql1);
    $sql2="
        UPDATE SECCIONES SET
        profesor_proyecto = NULL
        WHERE id = $id_seccion
    ";
    sql($sql2);
}

#####Funciones para las AREAS_PNF de Trabajo
function bd_areas_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM AREAS_PNF
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM AREAS_PNF
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_areas_pnf_datos($id_pnf, $id_nucleo){
    $sql="
    SELECT DISTINCT AREAS_PNF.id, id_pnf, id, id_nucleo, nombre, comite_tecnico
    FROM AREAS_PNF
    WHERE id_pnf = '{$id_pnf}' and AREAS_PNF.id = id and id_nucleo = '{$id_nucleo}'
    ";
    $salida = sql2array($sql);
    return $salida;
}


function bd_areas_pnf_agregar($nombre, $id_pnf, $id_nucleo){
    $sql = "INSERT INTO AREAS_PNF (nombre, id_pnf, id_nucleo)
    VALUES ('{$nombre}', '{$id_pnf}', '{$id_nucleo}')
    ";
    sql($sql);    
}


function bd_areas_pnf_modificar($areas)
{
    $sql = "
        UPDATE AREAS_PNF SET
            id = '{$areas['id']}',
            nombre = '{$areas['nombre']}'
        WHERE
            id = '{$areas['id']}'
    ";
    sql($sql);
    return $nombre;
}


function bd_areas_pnf_eliminar($id)
{
    $sql = "
        DELETE FROM AREAS_PNF
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $areas['id'];
}

function bd_comite_tecnico_cambiar($id_area, $id_rol, $id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql = "
        SELECT * FROM USUARIOS__ROLES
        WHERE id_usuario = '{$id_usuario}' AND id_rol = '{$id_rol}' AND id_nucleo = '{$id_nucleo}' and id_pnf = '{$id_pnf}'
        ";
    $rol=sql2row($sql);
    $sql1 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id = '{$rol['id']}'
        ";
    sql($sql1);
    $sql2="
        UPDATE AREAS_PNF SET
        comite_tecnico = NULL
        WHERE id = $id_area
    ";
    sql($sql2);
}


function bd_asignar_comite_tecnico($id_area,$id_rol,$id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql0="
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo, id_pnf)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}', '{$id_pnf}')
        ";
    sql($sql0);

    $sql1 = " 
        UPDATE AREAS_PNF SET
            comite_tecnico = '{$id_usuario}'
        WHERE
            id = '{$id_area}'
    ";
    sql($sql1);
}

#### Funciones Líder de Equipo


function bd_agregar_equipo($nombre, $id_seccion){
    if ($nombre== '' or $nombre == ' ' or $nombre == '  ' or $nombre ==  '    ') {
        # code...
        $sql = " 
        INSERT INTO EQUIPOS (nombre_equipo, id_seccion)
        VALUES ( NULL, '{$id_seccion}')
    ";
    sql($sql);
    }else{   
    $sql = " 
        INSERT INTO EQUIPOS (nombre_equipo, id_seccion)
        VALUES ('{$nombre}', '{$id_seccion}')
    ";
    sql($sql);
    }
}


function bd_asignar_lider_equipo($id_usuario,$id_rol,$seccion,$equipo){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    
    $sql1 = "
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo, id_pnf)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}', '{$id_pnf}')
        ";
    sql($sql1);
    $sql2 = " 
        UPDATE EQUIPOS SET
        id_persona = '{$id_usuario}'
        WHERE id = '{$equipo}'
    ";
    sql($sql2);
}

function bd_lider_equipo_cambiar($id_equipo, $id_rol, $id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql = "
        SELECT * FROM USUARIOS__ROLES
        WHERE id_usuario = '{$id_usuario}' AND id_rol = '{$id_rol}' AND id_nucleo = '{$id_nucleo}' and id_pnf = '{$id_pnf}'
        ";
    $rol=sql2row($sql);
    $sql1 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id = '{$rol['id']}'
        ";
    sql($sql1);
    $sql2="
        UPDATE EQUIPOS SET
        id_persona = NULL
        WHERE id = $id_equipo
    ";
    sql($sql2);
}


function bd_lider_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM EQUIPOS
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM EQUIPOS
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function  bd_lider_seccion($id_seccion){
    $sql="
        SELECT * 
        FROM EQUIPOS WHERE id_seccion= '{$id_seccion}'  
        ";
        $salida = sql2array($sql);
    return $salida;
}

function bd_lider_eliminar($id){
    $sql = "
        DELETE FROM EQUIPOS
        WHERE id = '{$id['id']}'
        ";
    sql($sql);
    return $lider['id'];
}


### Fnciones equipo

function bd_equipo_lider($id=NULL){
    if ($id==NULL) {
    $sql="
        SELECT * 
        FROM EQUIPOS
        WHERE id_persona = '{$_SESSION['u']['id']}'
    ";
    $salida = sql2array($sql);
    }else{
        $sql="
            SELECT * 
            FROM EQUIPOS
            WHERE id = '{$id}'
        ";
        $salida = sql2row($sql);
    }
    return $salida;
}


 function bd_equipo_seccion_profesor($id)
{
   $sql="SELECT id, nombre, apellido 
        FROM PERSONAS WHERE id = (SELECT profesor_proyecto FROM SECCIONES WHERE id =( SELECT id_seccion FROM EQUIPOS WHERE id = '{$id}' ))";

        return sql2row($sql);
} 

 function bd_equipo_seccion_lider($id)
{
   $sql="SELECT id, nombre, apellido 
        FROM PERSONAS WHERE id = ( SELECT id_persona FROM EQUIPOS WHERE id = '{$id}' )";

        return sql2row($sql);
} 

function bd_equipo_seccion_trayecto($id)
{
   $sql="SELECT id, trayecto 
        FROM TRAYECTOS WHERE id = (SELECT id_trayecto FROM SECCIONES WHERE id =( SELECT id_seccion FROM EQUIPOS WHERE id = '{$id}' ))";

        return sql2row($sql);
}


function bd_equipo_personas_datos($id){
    $sql="
        SELECT * FROM PERSONAS WHERE id IN ( 
        SELECT id_persona
        FROM EQUIPOS__PERSONAS
        WHERE id_equipo = '{$id}')
    ";
    $salida  = sql2array($sql);
    return $salida;
}

function bd_cambiar_nombre($id, $nombre){
    $sql="
        UPDATE EQUIPOS SET
        nombre_equipo = '{$nombre}'
        WHERE id = $id
    ";
    sql($sql);
}

function bd_agregar_integrante($id,$id_rol,$id_usuario,$numero_integrantes){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    # sql0 incerta el rol a la persona en la tabla USUARIOS__ROLES
    # sql1 inserta la ci del nuevo intef¿grante en el equipo correspondiente   
    # sql2 actualiza el numero de integrantes del equipo 
    $sql0="
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo, id_pnf)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}', '{$id_pnf}')
        ";
    sql($sql0);
    $sql1 = " 
        INSERT INTO EQUIPOS__PERSONAS (id_equipo, id_persona)
        VALUES ('{$id}', '{$id_usuario}' )
        ";
    sql($sql1);
    $sql2="
        UPDATE EQUIPOS SET
        numero_integrantes = '{$numero_integrantes}'
        WHERE id = '{$id}'
    ";
    sql($sql2);
}

function bd_equipo_eliminar_integrante($id,$numero_integrantes,$id_equipo){
    #sql elimna el usuario correspondiente 
    #sql actualiza el numero de integrantes 
    $sql = "
        DELETE FROM EQUIPOS__PERSONAS
        WHERE id_persona = '{$id}' and  id_equipo = '{$id_equipo}'
        ";
    sql($sql);
    $sql1="
        UPDATE EQUIPOS SET
        numero_integrantes = '{$numero_integrantes}'
        WHERE id = $id_equipo
    ";
    sql($sql1);
}


###Funciones de tutores


function bd_asignar_tutor_academico($equipo,$id_rol,$id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql0="
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo, id_pnf)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}', '{$id_pnf}')
        ";
    sql($sql0);

    $sql1 = " 
        UPDATE EQUIPOS SET
            tutor_academico = '{$id_usuario}'
        WHERE
            id = '{$equipo}'
    ";
    sql($sql1);
}

function bd_tutor_academico_cambiar($equipo, $id_rol, $id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql = "
        SELECT * FROM USUARIOS__ROLES
        WHERE id_usuario = '{$id_usuario}' AND id_rol = '{$id_rol}' AND id_nucleo = '{$id_nucleo}' and id_pnf = '{$id_pnf}'
        ";
    $rol=sql2row($sql);
    $sql1 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id = '{$rol['id']}'
        ";
    sql($sql1);
    $sql2="
        UPDATE EQUIPOS SET
        tutor_academico = NULL
        WHERE id = $equipo
    ";
    sql($sql2);
}
function bd_asignar_tutor_comunitario($equipo,$id_rol,$id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql0="
        INSERT INTO USUARIOS__ROLES (id_usuario, id_rol, id_nucleo, id_pnf)
        VALUES ('{$id_usuario}','{$id_rol}', '{$id_nucleo}', '{$id_pnf}')
        ";
    sql($sql0);

    $sql1 = " 
        UPDATE EQUIPOS SET
            tutor_comunitario = '{$id_usuario}'
        WHERE
            id = '{$equipo}'
    ";
    sql($sql1);
}

function bd_tutor_comunitario_cambiar($equipo,$id_rol,$id_usuario){
    $id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
    $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
    $sql = "
        SELECT * FROM USUARIOS__ROLES
        WHERE id_usuario = '{$id_usuario}' AND id_rol = '{$id_rol}' AND id_nucleo = '{$id_nucleo}' and id_pnf = '{$id_pnf}'
        ";
    $rol=sql2row($sql);
    $sql1 = "
        DELETE FROM USUARIOS__ROLES
        WHERE id = '{$rol['id']}'
        ";
    sql($sql1);
    $sql2="
        UPDATE EQUIPOS SET
        tutor_comunitario = NULL
        WHERE id = $equipo
    ";
    sql($sql2);
}

function bd_tutor_datos($id=NULL)
{
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM EQUIPOS
            WHERE id LIKE '{$id}'";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM EQUIPOS
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function  bd_tutor_seccion($id_seccion){
    $sql="
        SELECT * 
        FROM EQUIPOS WHERE id_seccion= '{$id_seccion}'  
        ";
        $salida = sql2array($sql);
    return $salida;
}

####    Funciones Proposiciones ######

function bd_proposiciones_datos($id=NULL){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM PROPOSICIONES
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
            $sql="
            SELECT *
            FROM PROPOSICIONES
            ";
            $salida = sql2array($sql);
       }
    return $salida;
}

function proposiones_eliminar($proposiciones){
    foreach ($$proposiciones as $proposicion) {
        # code...
        $sql = "
            DELETE FROM PROPOSICIONES
            WHERE id = '{$proposiciones['id']}'
            ";
        sql($sql);
    }
}
####    Funciones Propuestas ######


function bd_propuestas_datos($id=NULL){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM PROPUESTAS
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
            $sql="
            SELECT *
            FROM PROPUESTAS
            ";
            $salida = sql2array($sql);
       }
    return $salida;
}

function bd_propuestas_eliminar($id){
    # para eliminar una propuesta tambien se eliminanlas proposiones
    $propuesta = bd_propuestas_datos($id);
    $proposiciones=proposiones($propuesta);
    proposiones_eliminar($proposiciones);
    $sql = "
        DELETE FROM PROPUESTAS
        WHERE id = '{$id}'
        ";
    sql($sql);
}


function bd_propuestas_equipo($id=NULL, $status=NULL){
    /*
    la funcion utiliza dos paramatros para filtrar la id del equipo y  el status el cual hace referencia al estado de la propuesta los valores de esta DEBEN ser:
    NUEVA, ENVIAR, EVALUAR, APROVADA, RECHAZADA    
    */

    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM PROPUESTAS
            WHERE id_equipo LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM PROPUESTAS
            WHERE status = '{$status}'
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}


function bd_propuestas_agregar($datos, $proposiciones){
    #ver($datos);
    #vq($proposiciones);
    $id_propuesta = uniqid(true);
    $sql="  INSERT INTO PROPUESTAS (
            id,
            fecha, 
            id_docente, 
            id_equipo,
            id_lider, 
            id_comunidad, 
            id_pnf, 
            id_nucleo, 
            id_trayecto, 
            id_linea_investigacion,
            id_proposicion_1,
            id_proposicion_2,
            id_proposicion_3
            ) 
        VALUES (
            '{$id_propuesta}',
            '{$datos['fecha']}', 
            '{$datos['docente']}', 
            '{$datos['equipo_id']}', 
            '{$datos['lider']}', 
            '{$datos['comunidad']}', 
            '{$datos['pnf_id']}', 
            '{$_SESSION['r'][$_SESSION['numero']]['id_nucleo']}', 
            '{$datos['trayecto_id']}', 
            '{$datos['linea_investigacion']}',
            '{$proposiciones[0]['id']}',
            '{$proposiciones[1]['id']}',
            '{$proposiciones[2]['id']}'
            )";
    sql($sql);
    foreach ($proposiciones as $proposicion) {
        $sql = "
            INSERT INTO PROPOSICIONES (id, descripcion, objetivo)
            VALUES ( '{$proposicion['id']}','{$proposicion['proposicion']}', '{$proposicion['objetivo']}' )
        ";
        sql($sql);
        #$sql0 = "
        #    UPDATE PROPUESTAS SET
        #    {$proposicion['n_proposicion']} = '{$proposicion['id']}'
        #    WHERE id = '{$id_propuesta}'
        #";
        #sql($sql0);
    }
}

function bd_propuestas_modificar($datos){
    $sql0 = "
        UPDATE  PROPUESTAS SET
        id_comunidad = '{$datos['comunidad']}',
        id_linea_investigacion = '{$datos['linea_investigacion']}'
        WHERE id = '{$datos['id']}'
    ";
    sql($sql0);
    for ($i=1; $i <= 3 ; $i++) { 
        # code...
        $a = 'proposicion'.$i;
        $b = 'objetivo'.$i;
        $id ='id_proposicion_'.$i;
        $sql1 = " 
            UPDATE PROPOSICIONES SET
            descripcion = '{$datos[$a]}',
            objetivo = '{$datos[$b]}'
            WHERE id = '{$datos[$id]}'
        ";
        sql($sql1);
    }
    
}
function bd_propuestas_trayectos($trayecto, $status, $id_pnf){
    $sql="
        SELECT *
        FROM PROPUESTAS
        WHERE id_trayecto = '{$trayecto}' and status = '{$status}' and id_pnf = '{$id_pnf}'
        ";
    $salida = sql2array($sql);

    return $salida;
}

function bd_propuesta_cambiar_estatus($propuesta, $status){
    $sql="
        UPDATE PROPUESTAS SET
        status = '{$status}'
        WHERE id = '{$propuesta}'
    ";
    sql($sql);
}

function bd_proposicion_cambiar($datos){
    for ($i=1; $i <=3 ; $i++) { 
        # code...
        $id = 'id_'.$i;
        $status = 'status_'.$i;
        $sub_status = 'sub_status_'.$i;
        if ($datos[$sub_status] == 'NULL') {
            $sql =" 
        UPDATE PROPOSICIONES SET
        status = '{$datos[$status]}',
        sub_status = NULL
        WHERE id = '{$datos[$id]}'
    ";
    sql($sql);
        }elseif ($datos[$sub_status] === 'NIVEL') {
            $sql =" 
                UPDATE PROPOSICIONES SET
                status = '{$datos[$status]}',
                sub_status = '{$datos[$sub_status]}'
                WHERE id = '{$datos[$id]}'
            ";
            sql($sql);
            $trayecto = 'trayecto_adecuado_'.$i;
            $sql1="
                INSERT INTO PROPOSICIONES_DISPONIBES (
                id_propuesta,
                id_proposicion,
                id_pnf,
                id_trayecto
                )
                VALUES(
                '{$datos['id']}',
                '{$datos[$id]}',
                '{$_SESSION['r'][$_SESSION['numero']]['id_pnf']}',
                '{$datos[$trayecto]}'
                ) 
            ";
            sql($sql1);
        }else{
            $sql =" 
                UPDATE PROPOSICIONES SET
                status = '{$datos[$status]}',
                sub_status = '{$datos[$sub_status]}'
                WHERE id = '{$datos[$id]}'
            ";
            sql($sql);
        }
        $fecha = date('Y-m-d');
        $sql2= "
            UPDATE PROPUESTAS SET 
            fecha_evaluacion = '{$fecha}'
            WHERE id = '{$datos['id']}' 
        ";
        sql($sql2);
    }
}

function bd_proposicion_disponible($trayecto, $pnf){
    $sql = "
        SELECT PROPOSICIONES.id, descripcion, objetivo, id_propuesta, id_proposicion
        FROM PROPOSICIONES, PROPOSICIONES_DISPONIBES
        WHERE PROPOSICIONES.id = id_proposicion and  status = 'RECHAZADA' and sub_status = 'NIVEL' and PROPOSICIONES_DISPONIBES.id_pnf = '{$pnf}' and PROPOSICIONES_DISPONIBES.id_trayecto = '{$trayecto['id']}'
    ";
    $salida=sql2array($sql);
    return $salida;
}

############################

function    bd_buscar($tabla, $campos, $palabras){
    # Esta Funcion es la funcion de buscar usuarios 

    $miscampos = explode(',', $campos);
    foreach ($miscampos as $key => $value)
    {
        $miscampos[$key] .= " LIKE '%{$palabras}%'";
    }
    $condicion = implode(' OR ', $miscampos);
    $sql="
    SELECT * FROM {$tabla}
    WHERE ($condicion )
    ";
    $resultado=sql2array($sql);
        

 return $resultado;
}


#
# Funciones comunidades
#

function bd_comunidad($comunidad){
    $datos=bd_comunidades_datos($comunidad);
    $datos['estado'] = bd_ubicaciones2($datos['id_estado']);
    $datos['municipio'] = bd_ubicaciones2($datos['id_municipio']);
    $datos['parroquia'] = bd_ubicaciones2($datos['id_parroquia']);
    return $datos;
}

function bd_comunidades_datos($id){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM COMUNIDADES
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM COMUNIDADES
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_comunidad_registrar($valores){
    $sql1 = "
        INSERT INTO COMUNIDADES (nombre_comunidad, siglas, direccion, url, correo, telefono, id_estado, id_municipio, id_parroquia)
        VALUES ('{$valores['comunidad']}','{$valores['siglas']}', '{$valores['direccion']}', '{$valores['url']}', '{$valores['correo']}', '{$valores['tel']}','{$valores['estado']}', '{$valores['municipio']}', '{$valores['parroquia']}')
        ";
    sql($sql1);
    return 0;
}

#
#funciones observaciones
#

function bd_observaciones_datos($tabla, $fila, $id=NULL){
    if ($tabla!=NULL and $fila !=NULL) {
        $verificar= verificar();
        if (in_array('COMI_T', $verificar)){
            $sql="
                SELECT *
                FROM OBSERVACIONES
                WHERE tabla = '{$tabla}' and fila = '{$fila}'
                ";
            $salida = sql2array($sql);
        }else{
            $sql="
                SELECT *
                FROM OBSERVACIONES
                WHERE tabla = '{$tabla}' and fila = '{$fila}' and comite = 0
                ";
            $salida = sql2array($sql);
        }
    }elseif ($id!=NULL) {
        $sql="
            SELECT *
            FROM OBSERVACIONES
            WHERE id = '{$id}'
            ";
        $salida = sql2row($sql);
    }
    else {
        $sql="
            SELECT *
            FROM OBSERVACIONES
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_observaciones_añadir($datos){
    $fecha = date('Y-m-d');
    $id_persona = $_SESSION['u']['id'];
    $sql ="
        INSERT INTO OBSERVACIONES(fecha, descripcion, tabla, fila, id_persona)
        VALUES('{$fecha}', '{$datos['descripcion']}', '{$datos['tipo']}', '{$datos['fila']}','{$id_persona}')
        ";
   sql($sql);
}

function bd_observaciones_añadir_comite($datos){
    $fecha = date('Y-m-d');
    $id_persona = $_SESSION['u']['id'];
    
    if ($datos['comite'] = 1){
        $sql ="
        INSERT INTO OBSERVACIONES(fecha, descripcion, tabla, fila, id_persona, comite)
        VALUES('{$fecha}', '{$datos['descripcion']}', '{$datos['tipo']}', '{$datos['fila']}','{$id_persona}',1)
        ";
    }else{
        $sql ="
        INSERT INTO OBSERVACIONES(fecha, descripcion, tabla, fila, id_persona)
        VALUES('{$fecha}', '{$datos['descripcion']}', '{$datos['tipo']}', '{$datos['fila']}','{$id_persona}')
        ";
    }
   
   sql($sql);
}

function bd_observasiones_modficar($datos){
    $sql = "
        UPDATE OBSERVACIONES SET
            descripcion = '{$datos['descripcion']}'
        WHERE id = '{$datos['id']}' 
            ";
    sql($sql);
    return $datos['id'];
}

function bd_obdervaciones_eliminar($id){
    $sql = "
        DELETE FROM OBSERVACIONES
        WHERE id = '{$id}'
        ";
    sql($sql);
}

#
# Tipos de documentos
#

function bd_tipos_documento_datos($id=NULL){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM TIPOS_DE_DOCUMENTOS
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM TIPOS_DE_DOCUMENTOS
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_tipos_documento_agregar($datos){
    $sql ="
        INSERT INTO TIPOS_DE_DOCUMENTOS
        (nombre)
        VALUES('{$datos['nombre']}')
    ";
    sql($sql);
}

function bd_tipos_documento_eliminar($datos){
    $sql = "
        DELETE FROM TIPOS_DE_DOCUMENTOS
        WHERE id = '{$datos['id']}'
        ";
    sql($sql);
}

function bd_tipos_documento_modificar($datos){
    $sql = "
        UPDATE TIPOS_DE_DOCUMENTOS SET
            nombre = '{$datos['nombre']}'
        WHERE id = '{$datos['id']}' 
            ";
    sql($sql);
    return $datos['nombre'];
}

#
#estructuras
#
function bd_estructuras_datos($id=NULL, $id_tipo = NULL){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM ESTRUCTURAS
            WHERE id = '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM ESTRUCTURAS
            WHERE id_tipo_de_documento = '{$id_tipo}'
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_estructura_agregar($datos){
    $sql ="
        INSERT INTO ESTRUCTURAS
        (nombre, descripcion, parte, id_tipo_de_documento)
        VALUES('{$datos['nombre']}', '{$datos['descripcion']}', '{$datos['parte']}', {$datos['id']})
    ";
    sql($sql);
}

function bd_estructura_modificar($datos){
    $sql = "
        UPDATE ESTRUCTURAS SET
            nombre = '{$datos['nombre']}',
            descripcion = '{$datos['descripcion']}',
            parte = '{$datos['parte']}'
        WHERE id = '{$datos['id']}' 
            ";
    sql($sql);
    return $datos['nombre'];
}

function bd_estructura_eliminar($datos){
    $sql = "
        DELETE FROM ESTRUCTURAS
        WHERE id = '{$datos['id']}'
        ";
    sql($sql);
}

#
# Trabajos
#

function bd_trabajos_seccion($seccion){
    $sql="
        SELECT *
        FROM TRABAJOS
        WHERE id_seccion = '{$seccion}'
        ";
    $salida = sql2array($sql);
    return $salida;
}
function bd_trabajos_datos($id=NULL, $verificar = NULL ){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM TRABAJOS
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    }elseif ($verificar != NULL) {
        $sql="
            SELECT *
            FROM TRABAJOS
            WHERE responsable = '{$verificar['responsable']}' and id_pnf = '{$verificar['pnf']}' and id_nucleo = '{$verificar['nucleo']}' and id_seccion = '{$verificar['seccion']}'
            ";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM TRABAJOS
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_trabajos_iniciar($datos){
    $sql ="
        INSERT INTO TRABAJOS( 
            titulo,
            fecha_inicio,
            responsable,
            id_docente,
            id_equipo,
            id_linea_investigacion,
            id_nucleo,
            id_pnf,
            id_tipo_de_documento,
            id_trayecto,
            id_seccion,
            status
        )
        VALUES(
            '{$datos['titulo']}',
            '{$datos['fecha_inicio']}',
            '{$datos['responsable']}',
            '{$datos['id_docente']}',
            '{$datos['id_equipo']}',
            '{$datos['id_linea_investigacion']}',
            '{$datos['id_nucleo']}',
            '{$datos['id_pnf']}',
            '{$datos['id_tipo_de_documento']}',
            '{$datos['id_trayecto']}',
            '{$datos['seccion']}',
            'EN PROCESÓ'
        )
    ";
    sql($sql);
}

#
#entregables
#

function bd_entregales_datos($id=NULL){
    if ($id!=NULL) {
        $sql="
            SELECT *
            FROM ENTREGABLES
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    } else {
        $sql="
            SELECT *
            FROM ENTREGABLES
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}

function bd_entregables_caso($datos){
    switch ($datos['caso']) {
        case 'docente':
            # code...
             $sql="
                SELECT *
                FROM ENTREGABLES
                WHERE id_docente = '{$datos['id_docente']}' and id_pnf = '{$datos['pnf']}' and id_nucleo = '{$datos['nucleo']}' and id_seccion = '{$datos['seccion']}'
            ";
            $salida = sql2array($sql);
            break;
        case 'lider':
            # code...
             $sql="
                SELECT *
                FROM ENTREGABLES
                WHERE id_pnf = '{$datos['pnf']}' and id_nucleo = '{$datos['nucleo']}' and id_seccion = '{$datos['seccion']}'
            ";
            $salida = sql2array($sql);
            break;
        
        
    }
    return $salida;
}

function bd_seccion_tipo_documento($datos){
    $sql = "
        UPDATE SECCIONES SET
            id_tipo_de_documento = '{$datos['tipo']}'
        WHERE id = '{$datos['id']}' 
            ";
    sql($sql);
    return $datos;
}

function bd_entregables_agregar($datos){
    $sql ="
        INSERT INTO ENTREGABLES
        (
        id,
        fecha_inicio,
        fecha_entrega,
        observaciones,
        id_tipo_de_documento,
        id_nucleo,
        id_pnf,
        id_seccion,
        id_docente
        )
        VALUES(
        '{$datos['id']}',
        '{$datos['fecha_inicio']}',
        '{$datos['fecha_entrega']}',
        '{$datos['observaciones']}',
        '{$datos['id_tipo_de_documento']}',
        '{$datos['nucleo']}',
        '{$datos['pnf']}',
        '{$datos['seccion']}',
        '{$datos['docente']}'
        )
    ";
    sql($sql);
    foreach ($datos['estructura'] as $estructura) {
        # code...
         $sql1 ="
            INSERT INTO ENTREGABLES__ESTRUCTURA
            (id_entregable, id_estructura)
            VALUES('{$datos['id']}', '{$estructura}')
        ";
        sql($sql1);
    }

}

function bd_entregables_modificar($datos){
    $sql = "
        UPDATE ENTREGABLES SET
            observaciones = '{$datos['observaciones']}',
            fecha_inicio = '{$datos['fecha_inicio']}',
            fecha_entrega = '{$datos['fecha_entrega']}'
        WHERE id = '{$datos['id']}' 
        ";
    sql($sql);
    $sql1 = "
        DELETE FROM ENTREGABLES__ESTRUCTURA
        WHERE id_entregable = '{$datos['id']}'
        ";
    sql($sql1);
    foreach ($datos['estructura'] as $estructura) {
        # code...
        $sql2 ="
            INSERT INTO ENTREGABLES__ESTRUCTURA
            (id_entregable, id_estructura)
            VALUES('{$datos['id']}', '{$estructura}')
        ";
        sql($sql2);
    }

    
}

function bd_entrgables_estructura($id){
    $sql="
        SELECT nombre, descripcion, parte
            FROM ESTRUCTURAS, ENTREGABLES__ESTRUCTURA
            WHERE id_entregable = '{$id}' and ESTRUCTURAS.id = id_estructura
        ";
        $salida = sql2array($sql);
        return $salida;
}

function bd_entregables_eliminar($datos){
    $sql = "
        DELETE FROM ENTREGABLES
        WHERE id = '{$datos['id']}'
        ";
    sql($sql);
    $sql1 = "
        DELETE FROM ENTREGABLES__ESTRUCTURA
        WHERE id_entregable = '{$datos['id']}'
        ";
    sql($sql1);
}

function bd_documento_agregar($datos){
    $sql2 ="
        INSERT INTO TRABAJOS__DOCUMENTOS
        ( status, id_trabajo, id_documento, id_entregable, fecha_subida)
        VALUES( 'NUEVO', '{$datos['id_trabajo']}', '{$datos['id_documento']}', '{$datos['id_entregable']}','{$datos['fecha']}' )
    ";
    sql($sql2);
}

function bd_documentos_datos($campo= NULL, $id, $status = NULL){
    if ($campo == NULL) {
        $sql="
            SELECT *
            FROM TRABAJOS__DOCUMENTOS
            WHERE id LIKE '{$id}'
            ";
        $salida = sql2row($sql);
    }elseif ($status  != NULL) {
        # code...
        $sql="
            SELECT *
            FROM TRABAJOS__DOCUMENTOS
            WHERE $campo LIKE '{$id}' and status = '{$status}'
            ";
        $salida = sql2array($sql);
    } else {
        $sql="
            SELECT *
            FROM TRABAJOS__DOCUMENTOS
            WHERE $campo LIKE '{$id}'
            ";
        $salida = sql2array($sql);
    }
    return $salida;
}
function bd_documento_eliminar($datos){
    $sql = "
        DELETE FROM TRABAJOS__DOCUMENTOS
        WHERE id_documento = '{$datos['id']}'
        ";
    sql($sql);
}

function bd_documento_enviar($datos, $status){

 $sql = "
        UPDATE TRABAJOS__DOCUMENTOS SET
            status = '{$status}'
        WHERE id_documento = '{$datos['id']}' 
        ";
    sql($sql);
}

function bd_documentos($campo, $id){
    $sql="
        SELECT *
        FROM TRABAJOS__DOCUMENTOS
        WHERE $campo LIKE '{$id}'
        ";
    $salida = sql2array($sql);
    return $salida;
}
function bd_documentos_buscar($texto)
{
    $sql="SELECT id
        FROM TRABAJOS
        WHERE (titulo LIKE '%{$texto}%'
        OR resumen LIKE '%{$texto}%'
        OR palabras_clave LIKE '%{$texto}%') AND status = 'PUBLICADO'";
    return sql2ids($sql);
}

function bd_documentos_ficha($id)
{   
    $sql="
        SELECT *
        FROM TRABAJOS
        WHERE id LIKE '{$id}'";
    $salida = sql2row($sql);
    $salida['carrera_id'] = bd_pnf_datos($salida['id_pnf']);
    $salida['equipo'] = bd_equipo_personas_datos($salida['id_equipo']);
    $lider= bd_lider_datos($salida['id_equipo']);
    #vq($salida);
    $salida['lider'] = bd_personas_datos($lider['id_persona']);
    $tutores_id = bd_tutores_datos($salida['id_equipo']);
    $salida['tutor_comunitario'] = bd_personas_datos($tutores_id['tutor_comunitario']);
    $salida['tutor_academico'] = bd_personas_datos($tutores_id['tutor_academico']);
    return $salida;
}

function bd_tutores_datos($id){
        $sql="
        SELECT tutor_comunitario, tutor_academico
        FROM EQUIPOS
        WHERE id LIKE '{$id}'";
    $salida = sql2row($sql);
    return $salida;
}

function bd_documento_avanzada($d)
{
    $resultados = [];
    $nproc = 0;
    foreach ($d['campo'] as $i => $campo)
    {
        $temp = [];
        switch ($campo)
        {
            case 'titulo':
                if ($nproc == 0)
                {
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE titulo LIKE '%{$d['texto'][$i]}%'";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE titulo LIKE '%{$d['texto'][$i]}%'
                            AND id IN ({$ids})";
                    $resultados = sql2ids($sql);
                }
                #vq([$z,$sql]);
                break;
            case 'resumen':
                if ($nproc == 0)
                {
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE resumen LIKE '%{$d['texto'][$i]}%'";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE resumen LIKE '%{$d['texto'][$i]}%'
                            AND id IN ({$ids})";
                    $resultados = sql2ids($sql);
                    
                }
                break;
            case 'mes':
                if ($nproc == 0)
                {
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE fecha_mes LIKE '%{$d['texto'][$i]}%'";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE fecha_mes LIKE '%{$d['texto'][$i]}%'
                            AND id IN ({$ids})";
                    $resultados = sql2ids($sql);
                }
                break;
            case 'anyo':
                if ($nproc == 0)
                {
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE fecha_anyo LIKE '%{$d['texto'][$i]}%'";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE fecha_anyo LIKE '%{$d['texto'][$i]}%'
                            AND id IN ({$ids})";
                    $resultados = sql2ids($sql);
                }
                break;
            case 'p_clave':
                if ($nproc == 0)
                {
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE palabras_clave LIKE '%{$d['texto'][$i]}%'";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT id FROM TRABAJOS
                            WHERE palabras_clave LIKE '%{$d['texto'][$i]}%'
                            AND id IN ({$ids})";
                    $resultados = sql2ids($sql);
                }
                break;
            case 'autor':
                if ($nproc == 0)
                {
                    $sql = "SELECT documento_id id FROM autores
                            WHERE nombre LIKE '%{$d['texto'][$i]}%'
                            OR apellido LIKE '%{$d['texto'][$i]}%'
                            OR persona_id LIKE '%{$d['texto'][$i]}%'
                            ";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT documento_id id FROM autores
                            WHERE nombre LIKE '%{$d['texto'][$i]}%'
                            OR apellido LIKE '%{$d['texto'][$i]}%'
                            OR persona_id LIKE '%{$d['texto'][$i]}%'
                            AND documento_id IN ({$ids})";
                    $resultados = sql2ids($sql);
                }
                
                break;
            case 'tutor':
                if ($nproc == 0)
                {
                    $sql = "SELECT documento_id id FROM tutores
                            WHERE nombre LIKE '%{$d['texto'][$i]}%'
                            OR apellido LIKE '%{$d['texto'][$i]}%'
                            OR persona_id LIKE '%{$d['texto'][$i]}%'
                            ";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT documento_id id FROM tutores
                            WHERE nombre LIKE '%{$d['texto'][$i]}%'
                            OR apellido LIKE '%{$d['texto'][$i]}%'
                            OR persona_id LIKE '%{$d['texto'][$i]}%'
                            AND documento_id IN ({$ids})";
                    $resultados = sql2ids($sql);
                }
                break;
            case 'otro':
                if ($nproc == 0)
                {
                    $sql = "SELECT documento_id id FROM tutores
                            WHERE nombre LIKE '%{$d['texto'][$i]}%'
                            OR apellido LIKE '%{$d['texto'][$i]}%'
                            OR persona_id LIKE '%{$d['texto'][$i]}%'
                            ";
                    $resultados = sql2ids($sql);
                    $nproc++;
                }else{
                    $ids=join(',',$resultados);
                    $sql = "SELECT documento_id id FROM tutores
                            WHERE nombre LIKE '%{$d['texto'][$i]}%'
                            OR apellido LIKE '%{$d['texto'][$i]}%'
                            OR persona_id LIKE '%{$d['texto'][$i]}%'
                            AND documento_id IN ({$ids})";
                    $resultados = sql2ids($sql);
                }
                break;
            case 'carrera':
                # code...
                break;

        }
        
    }
    return $resultados;
}
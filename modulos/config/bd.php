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

function bd_usuarios_datos2($inicio, $cantidad, $rol, $nucleo, $pnf, $nivel){
    # Esta Funcion es la funcion para mostrar la lista de usuarios segun el nivel correspondiente al usuario  
    
    switch ($nivel) {
        default:
            # code...
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        case 1000:
            # Este es el caso de los usuarios que necesitan ver todos los usuarios
            $resultado=sql2array("SELECT id, correo
            FROM USUARIOS
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        case 900:
            # Aca se muestran todos los usuarios con el rol que estemos resiviendo de un mismo nucleo
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        /*
        case "800":
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 800
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        
        case "5ea6fd8de76d1":
            # Este es el caso de los usuarios que necesitan verlos usuarios nivel 700
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 700 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        case "5ea6fd8de77a2":
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 600
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 600 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        case "5ea6fd8de785e":
            # Este es el caso de los usuarios que necesitan ver  todos los usuarios de nivel 500
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 500 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        case "5ea6fd8de7c0f":
             # Ver los usuarios de nivel 400
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 400 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
            break;
        break;
        case "5ea6fd8de7c60":
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 300
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 300 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        case "5ea6fd8de7c9f":
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 200
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE nivel = 200 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        case "5ea6fd8de7cdd":
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 100
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES, NUCLEOS, PNF
            WHERE nivel = 100 and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf'
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;*/


    }
    


     return $resultado;
}

function    bd_usuarios_datos3($campos, $palabras,$cantidad,$rol,$nucleo,$pnf,$nivel){
    # Esta Funcion es la funcion de buscar usuarios 

    $miscampos = explode(',', $campos);
    foreach ($miscampos as $key => $value)
    {
        $miscampos[$key] .= " LIKE '%{$palabras}%'";
    }
    $condicion = implode(' OR ', $miscampos);

    switch ($nivel) {
        default:
             $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo' and id_pnf = '$pnf') 
            LIMIT $cantidad
            ");
        break;

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
            WHERE ($condicion ) and (ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo') 
            LIMIT $cantidad
            ");

            break;
        /*
        case 800:
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 700
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES, id_rol
            WHERE ($condicion ) and (nivel = 800 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");

            break;
        case 800:
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 800
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol
            FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (ROLES.id = '$rol' and USUARIOS.id = id_usuario and id_rol = ROLES.id and id_nucleo = '$nucleo')
            ORDER BY USUARIOS.id ASC#
            LIMIT $inicio,$cantidad
            ");
        break;
        case 700:
            # Este es el caso de los usuarios que necesitan verlos usuarios nivel 700
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 700 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
        case 600:
        # Este es el caso de los usuarios que necesitan verlos usuarios nivel 600
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 600 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
        case 500:
            # Este es el caso de los usuarios que necesitan verlos usuarios nivel 500
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 500 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
        case 400:
        # Este es el caso de los usuarios que necesitan verlos usuarios nivel 400
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 400 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
        case 300:
            # Este es el caso de los usuarios que necesitan ver los usuarios nivel 300
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 300 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
        case 200:
            # Este es el caso de los usuarios que necesitan verlos usuarios nivel 200
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 200 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
        case 100:
             # Este es el caso de los usuarios que necesitan verlos usuarios nivel 100
            $resultado=sql2array("SELECT DISTINCT USUARIOS.id, correo, id_rol FROM USUARIOS, ROLES, USUARIOS__ROLES
            WHERE ($condicion ) and (nivel = 100 and USUARIOS.id = id_usuario and id_rol = ROLES.id) 
            LIMIT $cantidad
            ");
            */
    }

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



function bd_usuarios_registrar($usuario,$n_roles,$roles,$nucleos,$caso){ 

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
    
    return "{$usuario['id']}";

}


function bd_usuarios_roles_datos($id){

    $sql="
            SELECT USUARIOS__ROLES.id, id_rol, id_nucleo, id_pnf, rol, nivel
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
function bd_nucleo_responsable($id_nucleo,$id_rol,$id_usuario){
    $sql0="
        UPDATE USUARIOS__ROLES SET
        id_nucleo = '{$id_nucleo}'
        WHERE id ='{$id_rol}'
        ";
    sql($sql0);
    $sql1="
        UPDATE NUCLEOS SET
        responsable = '{$id_usuario}'
        WHERE id = $id_nucleo
    ";
    sql($sql1);
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
    SELECT *
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
    $sql1="
        INSERT INTO PRIVILEGIOS(codigo, privilegio, direccion, nombre, icono)
        VALUES ('{$unico}','Ver lista de {$rol['rol']}','usuarios.php?5ea6fd8de7329={$unico}','{$rol['rol']}','fa fa-users')
    ";
    sql($sql1);
    
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
                $priv['cant']=0;
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

function bd_centros_contar(){
    return sql2value("SELECT COUNT(*) FROM CENTROS_DE_INVESTIGACION");
}

function bd_lineas_contar(){
    return sql2value("SELECT COUNT(*) FROM LINEAS_DE_INVESTIGACION");
}

function bd_nucleos_contar(){
    return sql2value("SELECT COUNT(*) FROM NUCLEOS");
}

function bd_pnf_contar($nucleo_id=NULL){
    if ($nucleo_id==NULL) 
    {
        return sql2value("SELECT COUNT(*) FROM NUCLEOS__PNF");
    } 
    else 
    {
        return sql2value("SELECT COUNT(*) FROM NUCLEOS__PNF WHERE id_nucleo = $nucleo_id");
    }
    
}

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



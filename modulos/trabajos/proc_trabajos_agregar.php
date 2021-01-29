<?php 
define('MOD', 'trabajos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

#ver($_POST);
#vq($_FILES);

$uploads_dir = '../../tmp';

foreach ($_FILES["pdf"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        
        if ($_FILES['pdf']['type'][$key] == 'application/pdf') {
            
            $tmp_name = $_FILES["pdf"]["tmp_name"][$key];
            $nuevo_nombre = uniqid();
             
            move_uploaded_file($tmp_name, "$uploads_dir/{$nuevo_nombre}.pdf");
            
        }
        $m="El documento se subio con exito";
        ir("../mensaje/mensaje_retorno.php?m=$m");
    }else{
        $m="No se pudo subir el documento";
        ir("../mensaje/mensaje_retorno.php?m=$m");

    }
}

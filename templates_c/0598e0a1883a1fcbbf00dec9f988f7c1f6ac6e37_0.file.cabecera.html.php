<?php
/* Smarty version 3.1.30, created on 2021-01-28 10:48:57
  from "/home/palencia/public_html/proyecto4/uptt/modulos/cabecera/cabecera.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6012ced991eb28_27499228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0598e0a1883a1fcbbf00dec9f988f7c1f6ac6e37' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/cabecera/cabecera.html',
      1 => 1611845336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6012ced991eb28_27499228 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">

<!--Comienzo de la Cabecera-->
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <!--Estilo de los iconos-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../estilos/sb-admin-2.css" rel="stylesheet">
  <link href="../../estilos/personal.css" rel="stylesheet" type="text/css" >
  
  <title>Repositorio</title>
  <link rel="shortcut icon" href="../../imagenes/logoejem.png">


  <nav  class="navbar navbar-expand-lg navbar-dark cab py-0 px-3">
  <a class="navbar-brand" href="../inicio/inicio.php"><img src="../../imagenes/logo_cab.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
<!--Comienzo del Formulario de Ingreso -->
 
 <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto"></ul>
    <form
      class="form-inline my-2 my-lg-0 collapse" 
      id="login" 
      name="login" 
      method="POST" 
      action="../login/proc_login.php">
      <div  class="row ">
        <div class="col">
        <div class="input-group "></div>
          <input 
            type="text"  
            class="form-control" 
            id="login" 
            name="login" 
            placeholder="correo@ejemplo.com"
            required="required">
        </div>
        <div class="col">  
          <input 
            type="password" 
            class="form-control" 
            id="clave" 
            name="clave" 
            placeholder="clave"
            required="required">
        </div>
        <div class="vol">  
          <button 
            type="submit" 
            class="btn btn-primary separador">Continuar</button>
        </div>

      </div>
    </form>
    <a class="icon enlace-claro separador"  data-toggle="collapse" href="#login"
    title="Ingresar"><i class="fa fa-user fa-fw" aria-hidden="true"></i></a>
    <a class="icon enlace-claro separador" href="../olvido/olvido.php"
    title="Olvide mi clave" style="color: #fff;"><i class="fa fa-lock" aria-hidden="true"></i>
 </a>
    
<!--Final del Formulario de Ingreso -->
 
</nav>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cab']->value)===null||$tmp==='' ? '' : $tmp);?>

</head>
<body>
<!--Final de la Cabecera --><?php }
}

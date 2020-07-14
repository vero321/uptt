<?php
/* Smarty version 3.1.30, created on 2020-07-13 21:38:34
  from "/home/palencia/public_html/proyecto4/uptt/modulos/cabecera/cabecera_interna.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0d0c9ac32bf2_90321351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '365f94ff9887b4114a2abfcc6cb57d191d611e0c' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/cabecera/cabecera_interna.html',
      1 => 1594690461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d0c9ac32bf2_90321351 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
?>
<!DOCTYPE html>
<html lang="es">

<!--Comienzo de la Cabecera-->
<head>
  <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- llama los estilos de DataTablet -->
  <link href="../../vendor/DataTables/datatables.min.css" rel="stylesheet" type="text/css">
  <link href="../../vendor/DataTables/css/dataTables.bootstrap4.css" rel="stylesheet"  type="text/css">
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../estilos/personal.css" rel="stylesheet" type="text/css">
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <!--Estilo de los iconos-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <title>Repositorio</title>
</head>

<body>
    <nav class="navbar fixed-top  navbar-expand-lg navbar-dark cab p-1 shadow-sm">
      <a class="navbar-brand" href="../inicio/inicio_interno.php"><img src="../../imagenes/logo_interno.png"></a>
        <!--<a class="navbar-brand" href="inicio_interno.php">Repositorio</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_SESSION["r"]) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <li class="nav-item <?php if ($_SESSION['r'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'] == $_SESSION['actual']) {?> active <?php }?> ">
                <a class="nav-link" href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'];?>
&n=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"> <?php echo smarty_modifier_capitalize($_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol']);?>
</a>
            </li>
          <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

    </ul>
    <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION["u"]["correo"];?>
</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../personas/personas_datos.php?id=<?php echo $_SESSION['u']['id'];?>
"><i class="fa fa-user fa-fw"></i>Perfil</a>
                        <a class="dropdown-item" href="../personas/usuarios_cambiar_clave.php"><i class="fa fa-unlock-alt fa-lg fa-fw"></i>Cambiar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../login/proc_exit.php"><i class="a fa-sign-out-alt fa-fw"></i>Salir</a>
                    </div>
                </li>
            </ul>
            
  </div>
</nav>
<?php }
}

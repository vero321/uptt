<?php
/* Smarty version 3.1.30, created on 2020-04-14 14:23:41
  from "/home/jose/public_html/proyecto4/uptt/templates/cabecera_interna.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e95ffad3fb2e4_21330635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96a837f38866063b8246a8b2e29840a2b47a9979' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/cabecera_interna.html',
      1 => 1586888619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e95ffad3fb2e4_21330635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">

<!--Comienzo de la Cabecera-->
<head>
  <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="./vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./estilos/personal.css">
  <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <!--Estilo de los iconos-->
  <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <title>Repositorio</title>
</head>

<body>
    <nav class="navbar fixed-top  navbar-expand-lg navbar-dark cab">
      <a class="navbar-brand" href="inicio_interno.php"><img src="./imagenes/logo_interno.png"></a>
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
                <a class="nav-link" href="distribuidor.php?r=<?php echo $_SESSION['r'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'];?>
&n=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"> <?php echo $_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>
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
    <a href="personas_datos.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-link usuario"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION["u"]["correo"];?>
</a>
    <a href="proc_exit.php" class="btn btn-outline-danger">Salir</a>
  </div>
</nav>
<?php }
}

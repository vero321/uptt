<?php
/* Smarty version 3.1.30, created on 2020-03-27 22:38:27
  from "/home/palencia/public_html/proyecto4/uptt/templates/personas_datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7eb8a3a7ad62_42734324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aab7d67d6da18bce4da3b9f07cfa00f8ff5b51e9' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/personas_datos.html',
      1 => 1585361654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:modal/modal_box.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e7eb8a3a7ad62_42734324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container">
            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9 offset-3"  >


        <h2 class="subtitulo" align="center">Datos </h2>
        <form 
          action="peronas_datos.php" 
          method="POST" 
          class="px-4 py-3" 
          id="datos_usuario"
          name="datos_usuario">

        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value['id'];?>
">
          <div class="form-group ">
            <label for="id0">Cedula</label>
            <input 
              class="form-control"
              value="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value['id'];?>
"
              disabled="disabled">
          </div>

        <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value['correo'];?>
">
          <div class="form-group">
            <label for="id0">Correo</label>
            <input 
              class="form-control"
              value="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value['correo'];?>
"
              disabled="disabled">
          </div>

<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['personas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

        <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['personas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
">
          <div class="form-group">
            <label for="id0">Nombre</label>
            <input 
              class="form-control"
              value="<?php echo $_smarty_tpl->tpl_vars['personas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
"
              disabled="disabled">
          </div>

        <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['personas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido'];?>
">
          <div class="form-group">
            <label for="id0">Apellido</label>
            <input 
              class="form-control"
              value="<?php echo $_smarty_tpl->tpl_vars['personas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido'];?>
"
              disabled="disabled">
        </div>


          <a style="margin-bottom: 20px;" class="link float-left btn btn-light" href="usuarios_cambiar_clave.php" value="Cambiar Clave">
          <i class="fa fa-unlock-alt fa-lg"></i>Cambiar Clave</a>

          <a style="margin-bottom: 20px;" class="link float-left btn btn-light mimodal" data-href="personas_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['personas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" value="Modificar Datos">
          <i class="fa fa-pencil-square-o fa-lg"></i>Modificar Datos</a>

          </form>
<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

    </div>
  </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 


<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

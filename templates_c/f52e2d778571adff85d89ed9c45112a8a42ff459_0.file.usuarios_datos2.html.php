<?php
/* Smarty version 3.1.30, created on 2020-03-17 23:32:04
  from "/home/veronica/public_html/uptt/templates/usuarios_datos2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e71963460fe44_18211028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f52e2d778571adff85d89ed9c45112a8a42ff459' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/usuarios_datos2.html',
      1 => 1584502321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e71963460fe44_18211028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" style="margin-top: 90px;">
    <div class="row">
        <div class="col-sm-3"> 

            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="col-sm-8">

    
        <h2 class="subtitulo" align="center">Datos </h2>

             
    <form 
      action="usuarios_datos2.php" 
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
      <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

      
      <a class="link float-left btn btn-light" href="usuarios_cambiar_clave.php" value="Avanzada"><i class="fa fa-unlock-alt fa-lg"></i>Cambiar Clave</a>
    </form>
      </div>
  </div>
</div>




<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2020-07-09 21:45:37
  from "/home/palencia/public_html/proyecto4/uptt/modulos/rol/templates/rol_privilegio_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f07c841ed85b1_65915151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91c0fbce654415123be2d92625e55b1673917093' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/rol/templates/rol_privilegio_agregar.html',
      1 => 1594172266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f07c841ed85b1_65915151 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1 align="center">Agregar Prilegios </h1>
                    <form 
                      action="proc_rol_privilegio_agregar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="registro_usuario"
                      name="registro_usuario">
                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['privilegios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="form-check">

                              <label class="form-check-label">
                                <input type="checkbox"  class="form-check-input"  
                                name="privilegio[]" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']);?>
">
                                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['privilegio']);?>

                              </label>
                            </div>
                          <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                        </div>
                      <div class="form-group">
                        <input 
                          class="btn-enviar btn btn-sm btn-primary" 
                          type="submit" 
                          name="enviar" 
                          value="Registrar">
                      </div>
                    </form>
                </div>
              </div>
            </section>
        </div>
  </div>
</div>

<?php }
}
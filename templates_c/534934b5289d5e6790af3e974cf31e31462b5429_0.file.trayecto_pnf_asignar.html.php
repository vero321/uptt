<?php
/* Smarty version 3.1.30, created on 2020-08-10 23:37:24
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_asignar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f32127403efb9_06091441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '534934b5289d5e6790af3e974cf31e31462b5429' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_asignar.html',
      1 => 1596653873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f32127403efb9_06091441 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
?>
<div class="container">
<div class="row">
  <div class="col-md-12">   
    <section id="home"></section>
        <section id="intro">
            <div class="container modal_col">
              <div class="centro"> 
                  <h3 align="center">Asignar Trayecto</h3>
                    <form 
                      action="proc_trayecto_pnf_asignar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="trayecto_asignar"
                      name="trayecto_asignar">
                      
                      <div class="form-check-label" >

                        <?php if (count($_smarty_tpl->tpl_vars['trayectos']->value) > 0) {?>
                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="form-group-sm " style="padding: 4px;">
                              <label class="switch ">
                                <input type="checkbox"  class="form-check-input"  
                                name="trayecto[]" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']);?>
">
                                <span class="slider round"></span>
                              </label>
                              <div class="text_switch"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['trayecto']);?>
</div> 
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
                        <?php } else { ?>
                          <div class="alert alert-info" role="alert">
                            <i class="fa fa-info-circle"></i>
                            NO hay mas trayectos disponibles para Asignar a su PNF
                          </div>
                        <?php }?>
                    </form>
                </div>
              </div>
            </section>
        </div>
  </div>
</div><?php }
}

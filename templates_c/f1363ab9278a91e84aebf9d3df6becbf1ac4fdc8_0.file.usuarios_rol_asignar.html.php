<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:10:15
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_rol_asignar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e2870f59d8_50057224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1363ab9278a91e84aebf9d3df6becbf1ac4fdc8' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_rol_asignar.html',
      1 => 1611073925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008e2870f59d8_50057224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-4"></div>
  <div class="col-6">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h3>Asignar Rol</h3>
                    <form 
                      action="proc_usuarios_rol_asignar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="Asignar_rol"
                      name="Asignar_rol">
                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="form-group">
                              <label class="switch ">
                                <input type="checkbox"  class="form-check-input"  
                                name="rol[]" value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                                <span class="slider round"></span>
                              </label>
                              <div class="text_switch"><?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>
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
                          class="btn-enviar btn btn-sm btn-primary rounded-pill" 
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

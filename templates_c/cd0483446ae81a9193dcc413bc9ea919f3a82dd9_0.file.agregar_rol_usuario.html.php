<?php
/* Smarty version 3.1.30, created on 2020-03-16 21:05:37
  from "/home/palencia/public_html/proyecto4/uptt/templates/agregar_rol_usuario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e702261b1f1a7_62531054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd0483446ae81a9193dcc413bc9ea919f3a82dd9' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/agregar_rol_usuario.html',
      1 => 1584404665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e702261b1f1a7_62531054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1 align="center">Agregar Rol </h1>
                    <form 
                      action="proc_usuarios_rol.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="registro_usuario"
                      name="registro_usuario">

                        <div class="form-group">
                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="form-check">

                              <label class="form-check-label">
                                <input type="checkbox"  class="form-check-input"  
                                name="rol[]" value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

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
                    </form>
                </div>
              </div>
            </section>
        </div>
  </div>
</div>

<?php }
}

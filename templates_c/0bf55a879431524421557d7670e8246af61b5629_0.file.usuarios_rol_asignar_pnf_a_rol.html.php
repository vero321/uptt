<?php
/* Smarty version 3.1.30, created on 2020-07-13 15:27:07
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_rol_asignar_pnf_a_rol.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0cb58bcfcff9_79289927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf55a879431524421557d7670e8246af61b5629' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_rol_asignar_pnf_a_rol.html',
      1 => 1594666706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cb58bcfcff9_79289927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-4"></div>
  <div class="col-6">    
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1>Asignar un PNF </h1>
                    <form 
                      action="proc_usuarios_rol_asignar_pnf_a_rol.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="registro_pnf_a_rol"
                      name="registro_pnf_a_rol">
                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pnf']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="pnf" id="pnf" value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>

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

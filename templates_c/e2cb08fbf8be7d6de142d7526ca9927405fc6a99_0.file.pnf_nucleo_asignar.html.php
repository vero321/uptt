<?php
/* Smarty version 3.1.30, created on 2020-07-15 22:43:34
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_asignar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0fbed628ffa8_60982570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2cb08fbf8be7d6de142d7526ca9927405fc6a99' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_asignar.html',
      1 => 1594866413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0fbed628ffa8_60982570 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h3 align="center">Asignar PNF</h3>
            <form 
             	action="proc_pnf_nucleo_asignar.php" 
             	method="POST" 
             	class="px-4 py-3" 
             	id="registro_usuario"
             	name="registro_usuario">
              <input type="hidden" name="id_nucleo" value="<?php echo $_smarty_tpl->tpl_vars['id_nucleo']->value;?>
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
                    <input type="checkbox"  class="form-check-input"  
                    name="pnf[]" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']);?>
">
                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto']);?>

                  </label>
                </div>
              <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
              <input 
                class="btn-enviar btn btn-sm btn-primary m-2" 
                type="submit" 
                name="enviar" 
                value="Registrar">
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</div><?php }
}

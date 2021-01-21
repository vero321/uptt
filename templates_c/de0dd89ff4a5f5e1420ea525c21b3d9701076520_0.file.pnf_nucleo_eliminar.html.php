<?php
/* Smarty version 3.1.30, created on 2021-01-20 23:15:09
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008f1bd288498_06049300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0dd89ff4a5f5e1420ea525c21b3d9701076520' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_eliminar.html',
      1 => 1611198904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008f1bd288498_06049300 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" ></section>
      <section id="intro">
        <div class="container p-2 m-3">
          <div class="centro"> 
            <h3 class="font-weight-bold text-gray-900">Eliminar PNF</h3>
            <form 
             	action="proc_pnf_nucleo_eliminar.php" 
             	method="POST" 
             	class="px-4 py-3" 
             	id="Elimibar_pnd_nucleo"
             	name="Elimibar_pnd_nucleo">
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
              <div class="form-group">
                <input type="tect" name="pnf" value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
" disabled="">
              </div>

              <input 
                class="btn btn-primary  rounded-pill m-2" 
                type="submit" 
                name="enviar" 
                value="Eliminar">
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</div><?php }
}

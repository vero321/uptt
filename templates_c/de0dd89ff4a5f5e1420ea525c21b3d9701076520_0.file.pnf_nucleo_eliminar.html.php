<?php
/* Smarty version 3.1.30, created on 2020-07-31 14:15:59
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f245fdfdda289_46620783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0dd89ff4a5f5e1420ea525c21b3d9701076520' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_eliminar.html',
      1 => 1594953276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f245fdfdda289_46620783 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
      <section id="intro">
        <div class="container">
          <div class="centro"> 
            <h3 align="center">Eliminar PNF</h3>
            <form 
             	action="proc_pnf_nucleo_eliminar.php" 
             	method="POST" 
             	class="px-4 py-3" 
             	id="registro_usuario"
             	name="registro_usuario">
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
              <div class="form-group">
                <input type="tect" name="pnf" value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
" disabled="">
              </div>

              <input 
                class="btn-enviar btn btn-sm btn-primary m-2" 
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

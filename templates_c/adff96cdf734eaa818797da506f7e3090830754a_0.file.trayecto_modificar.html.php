<?php
/* Smarty version 3.1.30, created on 2021-01-17 17:25:24
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayecto_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6004ab443be420_82373604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adff96cdf734eaa818797da506f7e3090830754a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayecto_modificar.html',
      1 => 1596660299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004ab443be420_82373604 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-md-12">   
    <section id="home"></section>
        <section id="intro">
            <div class="container modal_col">
              <div class="centro"> 
                  <h3 align="center">Modicar trayecto</h3>
                    <form 
                      action="proc_trayecto_modificar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="trayecto_agregar"
                      name="trayecto_agregar">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
">
                      <div class="form-group" >
                        <input class="form-control" type="text" name="trayecto" value="<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['trayecto'];?>
" required="" placeholder="trayecto I">
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
</div><?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-08-17 12:43:56
  from "/home/veronica/public_html/uptt/modulos/trayectos/templates/trayecto_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3ab3cc8c8769_63667364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6412fff917a65c2cd301b5e9ed5bfa3e2ef32cad' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/trayectos/templates/trayecto_modificar.html',
      1 => 1597320289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ab3cc8c8769_63667364 (Smarty_Internal_Template $_smarty_tpl) {
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

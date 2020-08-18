<?php
/* Smarty version 3.1.30, created on 2020-08-17 12:43:53
  from "/home/veronica/public_html/uptt/modulos/trayectos/templates/trayecto_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3ab3c9386bb7_47064522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '775496071c21ce18ae24aecc88eda8b0209592d7' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/trayectos/templates/trayecto_agregar.html',
      1 => 1597320289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ab3c9386bb7_47064522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-md-12">   
    <section id="home"></section>
        <section id="intro">
            <div class="container modal_col">
              <div class="centro"> 
                  <h3 align="center">Agregar trayecto</h3>
                    <form 
                      action="proc_trayecto_agregar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="trayecto_agregar"
                      name="trayecto_agregar">
                      
                      <div class="form-group" >
                        <input class="form-control" type="text" name="trayecto" required="" placeholder="trayecto I">
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

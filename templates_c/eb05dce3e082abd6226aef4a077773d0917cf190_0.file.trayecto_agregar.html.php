<?php
/* Smarty version 3.1.30, created on 2021-01-17 16:54:41
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayecto_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6004a411e28211_01641651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb05dce3e082abd6226aef4a077773d0917cf190' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayecto_agregar.html',
      1 => 1610916878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004a411e28211_01641651 (Smarty_Internal_Template $_smarty_tpl) {
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
                          class="btn-enviar btn  btn-primary rounded-pill" 
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

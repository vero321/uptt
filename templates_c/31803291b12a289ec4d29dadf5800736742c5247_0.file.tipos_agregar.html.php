<?php
/* Smarty version 3.1.30, created on 2021-01-19 16:45:04
  from "/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600744d05c7db8_32836228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31803291b12a289ec4d29dadf5800736742c5247' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_agregar.html',
      1 => 1611073923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600744d05c7db8_32836228 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-md-12">   
    <section id="home"></section>
        <section id="intro">
            <div class="container modal_col">
              <div class="centro"> 
                  <h3 align="center" class="font-weight-bold text-gray-900">Agregar tipo de trabajo</h3>
                    <form 
                      action="proc_tipo_agregar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="tipo_agregar"
                      name="tipo_agregar">
                      
                      <div class="form-group" >
                        <label class="text-gray-800">Nombre del tipo de trabajo</label>
                        <input class="form-control" type="text" name="nombre" required="" placeholder="Trabajo de investigación">
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
</div><?php }
}

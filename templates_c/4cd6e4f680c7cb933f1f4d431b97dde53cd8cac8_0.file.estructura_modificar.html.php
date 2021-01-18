<?php
/* Smarty version 3.1.30, created on 2021-01-17 22:41:38
  from "/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/estructura_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6004f5625560b6_11649806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cd6e4f680c7cb933f1f4d431b97dde53cd8cac8' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/estructura_modificar.html',
      1 => 1610937695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004f5625560b6_11649806 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-md-12">   
    <section id="home"></section>
        <section id="intro">
            <div class="container modal_col">
              <div class="centro"> 
                  <h3 align="center" class="font-weight-bold text-gray-900">Agregar estrucrura</h3>
                    <form 
                      action="proc_estructura_modificar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="tipo_agregar"
                      name="tipo_agregar">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                      <div class="form-group" >
                      	<label class="text-gray-900">Nombre</label>
                        <input class="form-control" type="text" name="nombre"
                        value="<?php echo $_smarty_tpl->tpl_vars['estructura']->value['nombre'];?>
" required="" placeholder="Trabajo de investigación">
                      </div>
                      <div class="form-group">
                      	<label class="text-gray-900">Descripción</label>
                      	<textarea class="form-control" name="descripcion" required=""><?php echo $_smarty_tpl->tpl_vars['estructura']->value['descripcion'];?>
</textarea>
                      </div>
                      <div class="form-group">
          					    <label >Example select</label>
          					    <select class="form-control" name="parte" required="">
          					      <option value="<?php echo $_smarty_tpl->tpl_vars['estructura']->value['parte'];?>
"><?php echo $_smarty_tpl->tpl_vars['estructura']->value['parte'];?>
</option>
                          <option value="I">I</option>
          					      <option value="II">II</option>
          					      <option value="III">III</option>
          					      <option value="IV">IV</option>
          					      <option value="V">V</option>
          					      <option value="VI">VI</option>
          					      <option value="VII">VII</option>
          					      <option value="VIII">VIII</option>
          					      <option value="IX">IX</option>
          					      <option value="X">X</option>
          					    </select>
          					  </div>
                      <div class="form-group">
                        <input 
                          class="btn-enviar btn btn-sm btn-primary rounded-pill p-2" 
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

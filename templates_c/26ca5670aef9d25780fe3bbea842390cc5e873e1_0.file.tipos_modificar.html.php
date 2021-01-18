<?php
/* Smarty version 3.1.30, created on 2021-01-17 22:22:59
  from "/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6004f1037dd179_79977224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ca5670aef9d25780fe3bbea842390cc5e873e1' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_modificar.html',
      1 => 1610936574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004f1037dd179_79977224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-md-12">   
    <section id="home"></section>
        <section id="intro">
            <div class="container modal_col">
              <div class="centro"> 
                  <h3 align="center">Modificar tipo de trabajo</h3>
                    <form 
                      action="proc_tipo_modificar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="tipo_agregar"
                      name="tipo_agregar">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
">
                      <div class="form-group" >
                        <input class="form-control" type="text" name="nombre" required="" placeholder="Trabajo de investigación" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
">
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

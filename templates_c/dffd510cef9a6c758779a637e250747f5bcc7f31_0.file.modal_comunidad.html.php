<?php
/* Smarty version 3.1.30, created on 2021-01-17 10:45:55
  from "/home/palencia/public_html/proyecto4/uptt/modulos/modal/modal_comunidad.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60044da32e9350_29365583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dffd510cef9a6c758779a637e250747f5bcc7f31' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/modal/modal_comunidad.html',
      1 => 1610894752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60044da32e9350_29365583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="modal_comunidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-primary font-weight-bold" id="image-gallery-title">Registrar comunidad</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body p-3">

        <form id="from_datos_comunidad">

          <div class="form-group">
            <label for="comunidad">Organismo, Institución o Comunidad a quien va dirigido el Proyecto</label>
            <textarea
              title="Escriba el Nombre de la Comunidad o Institución" 
              required="required" 
              class="form-control" 
              id="comunidad" 
              name="comunidad"
              rows="2"
              ></textarea> 
          </div>
          <div class="form-group">
                <label for="direccion">Siglas</label>
                <input 
                  type="text" 
                  title="Escriba las siglas ejemplo UPTT" 
                  class="form-control" 
                  id="siglas" 
                  name="siglas"
                  value="">
                
          </div>

          <div class="form-group">
              <label for="direccion">Dirección</label>
              <textarea
                title="Escriba la Dirección exacta" 
                required="required" 
                class="form-control direccion" 
                id="direccion" 
                name="direccion"
                rows="2"
                ></textarea> 
                
          </div>
            <div class="form-group">
              <label for="url">Dirección web</label>
              <input type="url" name="url" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="correo" class="form-control">
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="tel" name="tel" class="form-control">
            </div>
          
          <div class="form-row">
            <div class="form-group col">
              <label for="estado">Estado</label>
              <select id="estado" name="estado" class="form-control" required="">
                <option selected></option>
                <?php
$__section_j_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_0_total = $__section_j_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_0_total != 0) {
for ($__section_j_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_0_iteration <= $__section_j_0_total; $__section_j_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['estados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['estados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre'];?>
</option>
                <?php
}
}
if ($__section_j_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_0_saved;
}
?>
              </select>
            </div>

            <div class="form-group col">
              <label for="municipio">Municipio</label>
              <select id="municipio" name="municipio" class="form-control" required="">
                
              </select>
            </div>
            <div class="form-group col">
              <label for="parroquia">Parroquia</label>
              <select id="parroquia" name="parroquia" class="form-control" required="">
               
                
              </select>
            </div>
          </div>
          

          <button type="submit" class="btn btn-primary" id="btn_comunidad_registrar">Registra</button>
          <button type="button" class="btn btn-secondary" id="btn_comunidad_cacelar" data-dismiss="modal">cancelar</button>
        </form>

      </div>
      
    </div>
  </div>
</div><?php }
}
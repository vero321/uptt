<?php
/* Smarty version 3.1.30, created on 2020-10-27 21:06:02
  from "/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f98c3fae00540_05605057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a4003a9ed460f31512e705981944b5b202b4636' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos_agregar.html',
      1 => 1603847148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f98c3fae00540_05605057 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container py-4">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Atencion.</strong><br> Para una Extensión debes rellenar los campos y selecionar un nucleo y dar click en registar.
    <br>Para agregar un Nucleo solo debes Rellenar los campos y dar click en registar
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <section id="intro">
    <div class="container">
      <div class="centro"> 
        <h2>Agreagar Nucleo o Extensión</h2>
          <form 
          action="proc_nucleos_agregar.php" 
          method="POST" 
          class="px-4 py-3" 
          id="nucleos_agregar"
          name="nucleos_agregar">
                            
            <div class="form-group">
              <label for="nombre_largo">Nombre Completo</label>
              <input 
                type="text" 
                title="Escriba el Nombre Completo del Nucleo" 
                required="required" 
                class="form-control" 
                id="nombre_largo" 
                name="nombre_largo"
                placeholder="Univerisdad Politecnica Mario.....">
            </div>

            <div class="form-group">
              <label for="nombre_corto">Nombre Abreviado</label>
              <input 
              	type="text" 
              	title="Escriba el Nombre Abreviado del Nucleo" 
              	required="required" 
              	class="form-control" 
              	id="nombre_corto" 
              	name="nombre_corto"
              	placeholder="UPTT- Sede Beatriz">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Nucleos</label>
                <select class="form-control" id="extencion" name="extension">
                <option class="form-control" value="NULL" id="-----">----</option>
                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nucleos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <option class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
</option>
                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
              </select>
            </div>

            <div class="form-group">
              <input 
              class="btn-enviar boton btn btn-primary" 
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



<?php }
}

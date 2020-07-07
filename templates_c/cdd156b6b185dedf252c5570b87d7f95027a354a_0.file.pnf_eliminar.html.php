<?php
/* Smarty version 3.1.30, created on 2020-07-07 15:13:18
  from "/home/veronica/public_html/uptt/modulos/pnf/templates/pnf_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f04c94eaef984_27356948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd156b6b185dedf252c5570b87d7f95027a354a' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/pnf/templates/pnf_eliminar.html',
      1 => 1594149170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f04c94eaef984_27356948 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar PNF</h2>


  <form 
      action="../../mensaje_eliminar2.php"
      method="POST" 
      class="px-4 py-3" 
      id="pnf_eliminar"
      name="pnf_eliminar">
          <input type="hidden" name="nombre_corto" value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
">
          <input type="hidden" name="si" value="modulos/pnf/proc_pnf_eliminar.php">
          <input type="hidden" name="no" value="pnf.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['id'];?>
">
      
          <div class="form-group">
          <label for="nombre_largo">Nombre Completo</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="nombre_largo" 
            name="nombre_largo"
            placeholder="Escriba el Nombre Completo del PNF"
            value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_largo'];?>
"
            disabled="disabled">
        </div>
    
        <div class="form-group">
          <label for="nombre_corto">Nombre Abreviado</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="nombre_corto" 
            name="nombre_corto"
            placeholder="Escriba el Nombre Abreviado del PNF"
            value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
"
            disabled="disabled">
        </div>
    
        
        <div class="form-group">
      <input 
        class="btn-enviar boton" 
        type="submit" 
        name="enviar" 
        value="Eliminar">
      </div>

    </form>
    </div>
    
  </div>
</div>


<?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-07-28 15:05:51
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pnf/templates/pnf_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f20770f1cabb8_07608914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd53334a76cefd3378efe6f6fe1967a2580d3bae' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pnf/templates/pnf_eliminar.html',
      1 => 1594666706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f20770f1cabb8_07608914 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar PNF</h2>


  <form 
      action="../mensaje/mensaje_eliminar2.php"
      method="POST" 
      class="px-4 py-3" 
      id="pnf_eliminar"
      name="pnf_eliminar">
          <input type="hidden" name="nombre_corto" value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
">
          <input type="hidden" name="si" value="../pnf/proc_pnf_eliminar.php">
          <input type="hidden" name="no" value="../pnf/pnf.php">
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

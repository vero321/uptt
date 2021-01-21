<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:38:21
  from "/home/palencia/public_html/proyecto4/uptt/modulos/area/templates/areas_pnf_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e91d4f93d4_19298354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d556310d1e3cb160d019e75712a279c34457179' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/area/templates/areas_pnf_eliminar.html',
      1 => 1611196207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008e91d4f93d4_19298354 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar Area de Trabajo</h2>


  <form   

      action="../mensaje/mensaje_eliminar4.php"
      method="POST" 
      class="px-4 py-3" 
      id="areas_eliminar"
      name="areas_eliminar">
          <input type="hidden" name="nombre" 
          value="<?php echo $_smarty_tpl->tpl_vars['areas']->value['nombre'];?>
">
          <input type="hidden" name="si" value="../area/proc_areas_pnf_eliminar.php">
          <input type="hidden" name="no" value="../area/areas_pnf.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['areas']->value['id'];?>
">
      
          <div class="form-group">
          <label for="nombre">Nombre Completo</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="nombre" 
            name="nombre"
            placeholder="Escriba el Nombre Completo"
            value="<?php echo $_smarty_tpl->tpl_vars['areas']->value['nombre'];?>
"
            disabled="disabled">
        </div>
    
        
        <div class="form-group">
      <input 
        class="btn btn-primary rounded-pill" 
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

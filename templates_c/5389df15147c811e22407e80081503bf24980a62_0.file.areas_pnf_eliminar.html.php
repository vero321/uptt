<?php
/* Smarty version 3.1.30, created on 2020-11-04 11:25:46
  from "/home/veronica/public_html/uptt/modulos/area/templates/areas_pnf_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fa2c7fac59716_61131485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5389df15147c811e22407e80081503bf24980a62' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/area/templates/areas_pnf_eliminar.html',
      1 => 1598305729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa2c7fac59716_61131485 (Smarty_Internal_Template $_smarty_tpl) {
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

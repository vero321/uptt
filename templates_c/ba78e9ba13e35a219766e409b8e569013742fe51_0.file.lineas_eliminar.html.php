<?php
/* Smarty version 3.1.30, created on 2020-10-17 21:14:50
  from "/home/palencia/public_html/proyecto4/uptt/modulos/linea_de_investigacion/templates/lineas_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8b970a94b769_85527529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba78e9ba13e35a219766e409b8e569013742fe51' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/linea_de_investigacion/templates/lineas_eliminar.html',
      1 => 1594666706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b970a94b769_85527529 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar Centro de Investigación</h2>


  <form   

      action="../mensaje/mensaje_eliminar4.php"
      method="POST" 
      class="px-4 py-3" 
      id="lineas_eliminar"
      name="lineas_eliminar">
          <input type="hidden" name="nombre" 
          value="<?php echo $_smarty_tpl->tpl_vars['lineas']->value['nombre'];?>
">
          <input type="hidden" name="si" value="../linea_de_investigacion/proc_lineas_eliminar.php">
          <input type="hidden" name="no" value="../linea_de_investigacion/lineas.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['lineas']->value['id'];?>
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
            value="<?php echo $_smarty_tpl->tpl_vars['lineas']->value['nombre'];?>
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

<?php
/* Smarty version 3.1.30, created on 2020-07-11 14:28:38
  from "/home/veronica/public_html/uptt/modulos/centro_de_investigacion/templates/centros_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0a04d6956300_89690768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39146286f87011d0bbc6342b10244f8d55ca14c5' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/centro_de_investigacion/templates/centros_eliminar.html',
      1 => 1594492112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0a04d6956300_89690768 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar Centro de Investigación</h2>


  <form   

      action="../mensaje/mensaje_eliminar4.php"
      method="POST" 
      class="px-4 py-3" 
      id="centros_eliminar"
      name="centros_eliminar">
          <input type="hidden" name="nombre" 
          value="<?php echo $_smarty_tpl->tpl_vars['centros']->value['nombre'];?>
">
          <input type="hidden" name="si" value="../centro_de_investigacion/proc_centros_eliminar.php">
          <input type="hidden" name="no" value="../centro_de_investigacion/centros.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['centros']->value['id'];?>
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
            value="<?php echo $_smarty_tpl->tpl_vars['centros']->value['nombre'];?>
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

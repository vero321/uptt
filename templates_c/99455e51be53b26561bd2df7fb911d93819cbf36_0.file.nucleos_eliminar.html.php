<?php
/* Smarty version 3.1.30, created on 2020-10-16 14:21:49
  from "/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f89e4bda61b41_99949753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99455e51be53b26561bd2df7fb911d93819cbf36' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos_eliminar.html',
      1 => 1594666706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89e4bda61b41_99949753 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar Nucleo o Extensión</h2>


  <form  

      action="../mensaje/mensaje_eliminar2.php"
      method="POST" 
      class="px-4 py-3" 
      id="nucleos_eliminar"
      name="nucleos_eliminar">
          <input type="hidden" name="nombre_corto" 
          value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>
">
          <input type="hidden" name="si" value="../nucleo/proc_nucleos_eliminar.php">
          <input type="hidden" name="no" value="../nucleo/nucleos.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['id'];?>
">
      
          <div class="form-group">
          <label for="nombre_largo">Nombre Completo</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="nombre_largo" 
            name="nombre_largo"
            placeholder="Escriba el Nombre Completo"
            value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_largo'];?>
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
            placeholder="Escriba el Nombre Abreviado"
            value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>
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

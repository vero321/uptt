<?php
/* Smarty version 3.1.30, created on 2020-03-06 00:19:20
  from "/home/palencia/public_html/proyecto4/uptt/templates/sedes_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e61cf48907368_30953463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05ec6605a34f7b1493626245cd5d18223320a8ac' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/sedes_eliminar.html',
      1 => 1583466180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e61cf48907368_30953463 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar Sede o Depencia</h2>


  <form 
      method="POST" 
      class="px-4 py-3" 
      id="sedes_eliminar"
      name="sedes_eliminar">
          <input type="hidden" name="nombre_corto" value="">
          <input type="hidden" name="si" value="proc_eliminar_sede.php">
          <input type="hidden" name="no" value="sedes.php">
          <input type="hidden" name="id" value="">
      
          <div class="form-group">
          <label for="nombre_largo">Nombre Completo</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="nombre_largo" 
            name="nombre_largo"
            placeholder="Escriba el Nombre Completo"
            value="Nombre Completo"
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
            value="Nombre Abreviado"
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

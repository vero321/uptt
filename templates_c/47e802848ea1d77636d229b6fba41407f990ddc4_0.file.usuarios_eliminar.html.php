<?php
/* Smarty version 3.1.30, created on 2020-04-24 23:12:53
  from "/home/veronica/public_html/uptt/templates/usuarios_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea3aab5e95b51_68893527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47e802848ea1d77636d229b6fba41407f990ddc4' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/usuarios_eliminar.html',
      1 => 1587784368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3aab5e95b51_68893527 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8"> 
        <h2>Eliminar Usuario</h2>

        <form 
          action="mensaje_eliminar.php" 
          method="POST" 
          class="px-4 py-3" 
          id="eliminar_usuario"
          name="eliminar_usuario">
          <input type="hidden" name="correo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['correo'];?>
">
          <input type="hidden" name="si" value="proc_eliminar.php">
          <input type="hidden" name="no" value="usuarios.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
           
          <div class="form-group">
              <label for="id0">Usuario</label>
              <input 
                type="email" 
                title="Escriba su Correo Electrónico" 
                required="required" 
                class="form-control" 
                id="id0" 
                name="id0" 
                placeholder="login@correo.com"
                value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
"
                disabled="disabled">
            </div>
        
            <div class="form-group">
              <label for="nombre">correo</label>
              <input 
                type="text" 
                title="Escriba el Nombre" 
                required="required" 
                class="form-control" 
                id="correo" 
                name="correo"
                placeholder="Jhon Doe"
                value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['correo'];?>
"
                disabled="disabled">
            </div>
        
            
            
          
          <div class="form-group">
          <input 
            class="btn-enviar btn btn-sm btn-primary" 
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

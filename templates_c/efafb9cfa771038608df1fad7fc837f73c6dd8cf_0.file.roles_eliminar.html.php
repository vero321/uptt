<?php
/* Smarty version 3.1.30, created on 2020-03-26 11:34:02
  from "/home/veronica/public_html/uptt/templates/roles_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7ccb6a405935_80560336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efafb9cfa771038608df1fad7fc837f73c6dd8cf' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/roles_eliminar.html',
      1 => 1584932592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7ccb6a405935_80560336 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8"> 
        <h1>Eliminar Rol</h1>

        <form 
          action="mensaje_eliminar3.php" 
          method="POST" 
          class="px-4 py-3" 
          id="eliminar_usuario"
          name="eliminar_usuario">
          <input type="hidden" name="privilegio" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['rol'];?>
">
          <input type="hidden" name="si" value="proc_roloes_eliminar.php">
          <input type="hidden" name="no" value="roles.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
           
          <div class="form-group">
              <label for="id0">Rol</label>
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
                value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['rol'];?>
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
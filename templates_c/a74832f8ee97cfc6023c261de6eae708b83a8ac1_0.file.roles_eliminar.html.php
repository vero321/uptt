<?php
/* Smarty version 3.1.30, created on 2020-04-21 17:23:55
  from "/home/palencia/public_html/proyecto4/uptt/templates/roles_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e9f646b3db4c0_30893825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74832f8ee97cfc6023c261de6eae708b83a8ac1' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/roles_eliminar.html',
      1 => 1586641863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9f646b3db4c0_30893825 (Smarty_Internal_Template $_smarty_tpl) {
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
                value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['rol'];?>
"
                disabled="disabled">
            </div>
        
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input 
                type="text" 
                title="Escriba el Nombre" 
                required="required" 
                class="form-control" 
                id="correo" 
                name="correo"
                placeholder="Jhon Doe"
                value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
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

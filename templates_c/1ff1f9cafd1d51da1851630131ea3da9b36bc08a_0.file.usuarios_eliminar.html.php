<?php
/* Smarty version 3.1.30, created on 2020-03-19 12:30:12
  from "/home/palencia/public_html/proyecto4/uptt/templates/usuarios_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e739e1499fa16_47155852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff1f9cafd1d51da1851630131ea3da9b36bc08a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/usuarios_eliminar.html',
      1 => 1584390472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e739e1499fa16_47155852 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8"> 
        <h1>Eliminar Usuario</h1>

        <form 
          action="mensaje_eliminar.php" 
          method="POST" 
          class="px-4 py-3" 
          id="eliminar_usuario"
          name="eliminar_usuario">
          <input type="hidden" name="correo" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['correo'];?>
">
          <input type="hidden" name="si" value="proc_eliminar.php">
          <input type="hidden" name="no" value="usuarios.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
                value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
                value="<?php echo $_smarty_tpl->tpl_vars['d']->value['correo'];?>
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

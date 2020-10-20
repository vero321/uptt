<?php
/* Smarty version 3.1.30, created on 2020-10-17 21:15:23
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8b972ba04836_38107408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff226ff9512bda01e417361f8fcbe577ed5264b9' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_eliminar.html',
      1 => 1600447702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b972ba04836_38107408 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8"> 
        <h2>Eliminar Usuario</h2>

        <form 
          action="../mensaje/mensaje_eliminar.php" 
          method="POST" 
          class="px-4 py-3" 
          id="eliminar_usuario"
          name="eliminar_usuario">
          <?php if (isset($_smarty_tpl->tpl_vars['rol']->value)) {?>
            <input type="hidden" name="rol" value="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
">
          <?php }?>
          <input type="hidden" name="nivel" value="<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
">
          <input type="hidden" name="correo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['correo'];?>
">
          <input type="hidden" name="si" value="../usuario/proc_eliminar.php">
          <input type="hidden" name="no" value="../usuario/usuarios.php?5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['rol_listar']->value;?>
">
          <input type="hidden" name="rol_listar" value="<?php echo $_smarty_tpl->tpl_vars['rol_listar']->value;?>
">
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

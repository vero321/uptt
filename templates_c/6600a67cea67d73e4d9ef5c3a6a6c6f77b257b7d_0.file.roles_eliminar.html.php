<?php
/* Smarty version 3.1.30, created on 2020-07-13 19:14:51
  from "/home/palencia/public_html/proyecto4/uptt/modulos/rol/templates/roles_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0ceaeb852d41_14860362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6600a67cea67d73e4d9ef5c3a6a6c6f77b257b7d' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/rol/templates/roles_eliminar.html',
      1 => 1594666706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0ceaeb852d41_14860362 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8"> 
        <h1>Eliminar Rol</h1>

        <form 
          action="../mensaje/mensaje_eliminar3.php" 
          method="POST" 
          class="px-4 py-3" 
          id="eliminar_usuario"
          name="eliminar_usuario">
          <input type="hidden" name="privilegio" value="<b><?php echo $_smarty_tpl->tpl_vars['datos']->value['rol'];?>
</b> Si elimina este rol se eliminara de todos los usuarios que tengan este rol">
          <input type="hidden" name="si" value="../rol/proc_roloes_eliminar.php">
          <input type="hidden" name="no" value="../rol/roles.php">
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
          <input 
            class="btn-enviar btn btn-sm btn-primary" 
            type="submit" 
            name="enviar" 
            value="Eliminar">
          </div>

      </form>
    </div>
  </div>
 </div><?php }
}

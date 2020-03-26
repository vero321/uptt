<?php
/* Smarty version 3.1.30, created on 2020-03-24 14:48:30
  from "/home/veronica/public_html/uptt/templates/personas_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7a55fe15c5f6_41739272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab054ba0f5e089ed420bed40881c7630b1abb0e' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/personas_modificar.html',
      1 => 1584545537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7a55fe15c5f6_41739272 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Modificar Persona</h2>


      <form 
      action="proc_personas_modificar.php" 
      method="POST" 
      class="px-4 py-3" 
      id="registro_usuario"
      name="registro_usuario">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['id'];?>
">
      <div class="form-group">
          <label for="id0">Cedula</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="id0" 
            name="id0" 
            placeholder="1234567"
            value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['id'];?>
"
            disabled="disable">
        </div>
    
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input 
            type="text" 
            title="Escriba el Nombre" 
            required="required" 
            class="form-control" 
            id="nombre" 
            name="nombre"
            placeholder="Jhon Doe"
            value="<?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
">
        </div> 

        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input 
            type="text" 
            title="Escriba el apellido" 
            required="required" 
            class="form-control" 
            id="apellido" 
            name="apellido"
            placeholder="Jhon Doe"
            value="<?php echo $_smarty_tpl->tpl_vars['d']->value['apellido'];?>
">
        </div> 

           
      
      <div class="form-group">
      <input 
        class="btn-enviar boton" 
        type="submit" 
        name="enviar" 
        value="Modificar">
      </div>

    </form>
    </div>
    
  </div>
</div>


<?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-10-27 08:20:39
  from "/home/veronica/public_html/uptt/modulos/personas/templates/personas_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f981097f08ef4_73390544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30df519bb63b78fcc14ab720dbe33fcbc61fef49' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/personas/templates/personas_modificar.html',
      1 => 1601468303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f981097f08ef4_73390544 (Smarty_Internal_Template $_smarty_tpl) {
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
            value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['nombre'];?>
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
            value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['apellido'];?>
">
        </div> 

           
      
      <div class="form-group">
      <input 
        class="btn btn-primary boton" 
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

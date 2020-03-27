<?php
/* Smarty version 3.1.30, created on 2020-03-26 15:26:39
  from "/home/jose/public_html/proyecto4/uptt/templates/centros_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d01efd90f92_15001070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b064014d945d7b2b354eb2cffbfa15d04103265f' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/centros_modificar.html',
      1 => 1585239458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d01efd90f92_15001070 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
    	<h2>Modificar Centro de Investigación</h2>
      	<form 
    	action="proc_centros_modificar.php" 
    	method="POST" 
    	class="px-4 py-3" 
    	id="centros_modificar"
    	name="centros_modificar">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['centros']->value['id'];?>
">
     	<div class="form-group">
      	<div class="form-group">
          <label for="nombre">Nombre Completo</label>
          <input 
            type="text" 
            title="Escriba el Nombre Completo del Centro de Investigación" 
            required="required" 
            class="form-control" 
            id="nombre" 
            name="nombre"
            placeholder="Jhon Doe"
            value="<?php echo $_smarty_tpl->tpl_vars['centros']->value['nombre'];?>
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

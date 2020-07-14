<?php
/* Smarty version 3.1.30, created on 2020-07-13 13:55:27
  from "/home/palencia/public_html/proyecto4/uptt/modulos/centro_de_investigacion/templates/centros_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0ca00f22ae81_71690084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a3730dd2e571a9141e9bcc59446073798d0a30f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/centro_de_investigacion/templates/centros_modificar.html',
      1 => 1594172266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0ca00f22ae81_71690084 (Smarty_Internal_Template $_smarty_tpl) {
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

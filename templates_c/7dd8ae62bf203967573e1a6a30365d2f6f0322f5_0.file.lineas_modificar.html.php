<?php
/* Smarty version 3.1.30, created on 2020-10-17 20:55:23
  from "/home/palencia/public_html/proyecto4/uptt/modulos/linea_de_investigacion/templates/lineas_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8b927be62c53_19821537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dd8ae62bf203967573e1a6a30365d2f6f0322f5' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/linea_de_investigacion/templates/lineas_modificar.html',
      1 => 1594172266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b927be62c53_19821537 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
    	<h2>Modificar Línea de Investigación</h2>
      	<form 
    	action="proc_lineas_modificar.php" 
    	method="POST" 
    	class="px-4 py-3" 
    	id="lineas_modificar"
    	name="lineas_modificar">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['lineas']->value['id'];?>
">
     	<div class="form-group">
      	<div class="form-group">
          <label for="nombre">Nombre Completo</label>
          <input 
            type="text" 
            title="Escriba el Nombre Completo de la Línea de Investigación" 
            required="required" 
            class="form-control" 
            id="nombre" 
            name="nombre"
            placeholder="Jhon Doe"
            value="<?php echo $_smarty_tpl->tpl_vars['lineas']->value['nombre'];?>
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

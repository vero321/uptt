<?php
/* Smarty version 3.1.30, created on 2020-07-07 13:58:23
  from "/home/veronica/public_html/uptt/modulos/centro_de_investigacion/templates/centros_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f04b7bfbbc6e8_98671099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '738175b0178add27e83351fba11a5fbd4d4bf172' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/centro_de_investigacion/templates/centros_modificar.html',
      1 => 1594137294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f04b7bfbbc6e8_98671099 (Smarty_Internal_Template $_smarty_tpl) {
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

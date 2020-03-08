<?php
/* Smarty version 3.1.30, created on 2020-03-06 00:19:17
  from "/home/palencia/public_html/proyecto4/uptt/templates/sedes_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e61cf45097fb7_52509568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a4b1c00956b7acd90fcccc8974c1d63832ead6' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/sedes_modificar.html',
      1 => 1583466180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e61cf45097fb7_52509568 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
    	<h2>Modificar Sede o Dependencia</h2>
      	<form 
    	action="proc_modificar_sede.php" 
    	method="POST" 
    	class="px-4 py-3" 
    	id="sedes_modificar"
    	name="sedes_modificar">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
     	<div class="form-group">
      	<div class="form-group">
          <label for="nombre_largo">Nombre Completo</label>
          <input 
            type="text" 
            title="Escriba el Nombre Completo" 
            required="required" 
            class="form-control" 
            id="nombre_largo" 
            name="nombre_largo"
            placeholder="Jhon Doe"
            value="Nombre Completo">
        </div> 

        <div class="form-group">
          <label for="nombre_corto">Nombre Abreviado</label>
          <input 
            type="text" 
            title="Escriba el nombre Abreviado" 
            required="required" 
            class="form-control" 
            id="nombre_corto" 
            name="nombre_corto"
            placeholder="Jhon Doe"
            value="Nombre Abreviado">
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

<?php
/* Smarty version 3.1.30, created on 2020-07-13 13:51:35
  from "/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0c9f275f8281_45147512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05aaa5d2b65681ab00488af90174886bc89c492d' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos_modificar.html',
      1 => 1593638413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c9f275f8281_45147512 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
    	<h2>Modificar Nucleo o Extensión</h2>
      	<form 
    	action="proc_nucleos_modificar.php" 
    	method="POST" 
    	class="px-4 py-3" 
    	id="nucleos_modificar"
    	name="nucleos_modificar">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['id'];?>
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
            value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_largo'];?>
">
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
            value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>
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

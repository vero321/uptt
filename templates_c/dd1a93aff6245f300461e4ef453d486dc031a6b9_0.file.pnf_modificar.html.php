<?php
/* Smarty version 3.1.30, created on 2020-03-09 10:01:42
  from "/home/veronica/public_html/uptt/templates/pnf_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e664c46518807_80300765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd1a93aff6245f300461e4ef453d486dc031a6b9' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/pnf_modificar.html',
      1 => 1583762498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e664c46518807_80300765 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
    	<h2>Modificar PNF</h2>
      	<form 
    	action="proc_pnf_modificar.php" 
    	method="POST" 
    	class="px-4 py-3" 
    	id="pnf_modificar"
    	name="pnf_modificar">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['id'];?>
">
     	<div class="form-group">
      	<div class="form-group">
          <label for="nombre_largo">Nombre Completo</label>
          <input 
            type="text" 
            title="Escriba el Nombre Completo del PNF" 
            required="required" 
            class="form-control" 
            id="nombre_largo" 
            name="nombre_largo"
            placeholder=""
            value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_largo'];?>
">
        </div> 

        <div class="form-group">
          <label for="nombre_corto">Nombre Abreviado</label>
          <input 
            type="text" 
            title="Escriba el nombre Abreviado del PNF" 
            required="required" 
            class="form-control" 
            id="nombre_corto" 
            name="nombre_corto"
            placeholder="Jhon Doe"
            value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
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

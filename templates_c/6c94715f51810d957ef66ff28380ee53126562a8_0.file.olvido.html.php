<?php
/* Smarty version 3.1.30, created on 2020-03-30 18:20:51
  from "/home/veronica/public_html/uptt/templates/olvido.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8270c3f14588_48630279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c94715f51810d957ef66ff28380ee53126562a8' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/olvido.html',
      1 => 1585606850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e8270c3f14588_48630279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <div class="row" id="central">
        
        <div class="col-10 "  >
			
		<h2 class="subtitulo">¿0lvidaste Tu Contraseña?</h2>

<div class="jumbotron">
	<div class="container">
		<h3>Para recuperar tu cotraseña rellena el formulario</h3>
			<form action="proc_olvido.php" method="POST" class="px-4 py-3">
				 <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input 
                    	type="email" 
                        title="Escriba su Correo Electrónico" 
                        required="required" 
                        class="form-control" 
                        id="correo" 
                        name="correo" 
                        placeholder="correo@correo.com">
                 </div>
                 <div class="form-group">
          			<input 
          			class="btn-enviar btn btn-sm btn-primary" 
          			type="submit" 
          			name="enviar" 
          			value="Enviar">
                </div>
				
			</form>

		</div>	
</div>

</div>
</div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

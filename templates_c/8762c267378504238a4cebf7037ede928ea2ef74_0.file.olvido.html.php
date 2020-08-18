<?php
/* Smarty version 3.1.30, created on 2020-08-17 12:40:53
  from "/home/veronica/public_html/uptt/modulos/olvido/templates/olvido.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3ab31569fd07_17655490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8762c267378504238a4cebf7037ede928ea2ef74' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/olvido/templates/olvido.html',
      1 => 1595956720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f3ab31569fd07_17655490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5 ">
		
	    <img src="../../imagenes/logo_ini.png" class="m-4">

        <div class="card p-4 mb-4 mp-4 shadow">
    		  <p class="text-center">¿Olvidaste tu contraseña? Aquí puede recuperar fácilmente una nueva contraseña.</p>
    			<form action="proc_olvido.php" method="POST" class="px-4 py-3">
    				 <div class="form-group">
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
              			class="btn-enviar btn btn-md btn-block btn-primary" 
              			type="submit" 
              			name="enviar" 
              			value="Enviar">
                </div>
    				
    			</form>

    		</div>	
    </div>
  </div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
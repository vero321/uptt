<?php
/* Smarty version 3.1.30, created on 2020-10-17 20:10:31
  from "/home/palencia/public_html/proyecto4/uptt/modulos/olvido/templates/olvido.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8b87f7aa0762_17727033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35bd36a2555d9347745f7443af69ff87e0cf5c6c' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/olvido/templates/olvido.html',
      1 => 1602979829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f8b87f7aa0762_17727033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5 ">

        <div class="card p-4  my-4 shadow">
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

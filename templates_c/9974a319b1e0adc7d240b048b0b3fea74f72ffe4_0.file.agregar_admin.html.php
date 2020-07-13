<?php
/* Smarty version 3.1.30, created on 2020-07-09 21:35:41
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/agregar_admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f07c5ed369588_15169927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9974a319b1e0adc7d240b048b0b3fea74f72ffe4' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/agregar_admin.html',
      1 => 1594172266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f07c5ed369588_15169927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1 align="center">Registrar Usuario</h1>
                    <form 
                    	action="proc_usuarios_registrar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="registro_usuario"
                    	name="registro_usuario">
                      <input type="hidden" name="rol_listar" value="<?php echo $_smarty_tpl->tpl_vars['rol_listar']->value;?>
">
                    
                     	<div class="form-group">
                        	<label for="id">Cedula</label>
                        	 <input 
                            type="text" 
                            title="Escriba la ci del Usuario" 
                            required="required" 
                            class="form-control" 
                            id="id" 
                            name="id" 
                            placeholder="12345678"
                            >
                      	</div>

                      <div class="form-group">
                          <label for="correo">Correo Electrónico</label>
                           <input 
                            type="email" 
                            title="Escriba su Correo Electrónico" 
                            required="required" 
                            class="form-control" 
                            id="correo" 
                            name="correo" 
                            placeholder="login@correo.com">
                        </div>
                        
                    	<div class="form-group">
          							<input 
          								class="btn-enviar btn btn-sm btn-primary" 
          								type="submit" 
          								name="enviar" 
          								value="Registrar">
                    	</div>
                    </form>
              </div> 
            </div>
        </section>
  </div>
  <div class="col-2"></div>

</div>  
</div>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-07-20 12:42:13
  from "/home/veronica/public_html/uptt/modulos/nucleo/templates/nucleos_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f15c965e5d2b3_84932733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bd6d06a8e212ed757ff0d358a05e1a9b5d2cae2' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/nucleo/templates/nucleos_agregar.html',
      1 => 1583720301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f15c965e5d2b3_84932733 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Agreagar Nucleo o Extensión</h2>
                    <form 
                    	action="proc_nucleos_agregar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="nucleos_agregar"
                    	name="nucleos_agregar">
                    
                     	                    
                      	<div class="form-group">
                          <label for="nombre_largo">Nombre Completo</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo del Nucleo" 
                            required="required" 
                            class="form-control" 
                            id="nombre_largo" 
                            name="nombre_largo"
                            placeholder="Univerisdad Politecnica Mario.....">
                        </div>


                        <div class="form-group">
                      		<label for="nombre_corto">Nombre Abreviado</label>
                        	<input 
                        		type="text" 
                        		title="Escriba el Nombre Abreviado del Nucleo" 
                        		required="required" 
                        		class="form-control" 
                        		id="nombre_corto" 
                        		name="nombre_corto"
                        		placeholder="UPTT- Sede Beatriz">
                      	</div>
                    
                    
                    	<div class="form-group">
          							<input 
          								class="btn-enviar boton" 
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

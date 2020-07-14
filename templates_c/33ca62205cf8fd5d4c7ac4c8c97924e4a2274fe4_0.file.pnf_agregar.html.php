<?php
/* Smarty version 3.1.30, created on 2020-07-13 15:03:56
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pnf/templates/pnf_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0cb01ce35fb9_64032545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33ca62205cf8fd5d4c7ac4c8c97924e4a2274fe4' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pnf/templates/pnf_agregar.html',
      1 => 1593638413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cb01ce35fb9_64032545 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Agreagar PNF</h2>
                    <form 
                    	action="proc_pnf_agregar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="pnf_agregar"
                    	name="pnf_agregar">
                    
                     	                    
                      	<div class="form-group">
                          <label for="nombre_largo">Nombre Completo</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo del PNF" 
                            required="required" 
                            class="form-control" 
                            id="nombre_largo" 
                            name="nombre_largo"
                            placeholder="Programa Nacional de Formación...">
                        </div>


                        <div class="form-group">
                      		<label for="nombre_corto">Nombre Abreviado</label>
                        	<input 
                        		type="text" 
                        		title="Escriba el Nombre Abreviado del PNF" 
                        		required="required" 
                        		class="form-control" 
                        		id="nombre_corto" 
                        		name="nombre_corto"
                        		placeholder="Informatica">
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

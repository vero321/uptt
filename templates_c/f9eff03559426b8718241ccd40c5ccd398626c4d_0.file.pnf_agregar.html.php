<?php
/* Smarty version 3.1.30, created on 2020-03-24 13:36:23
  from "/home/palencia/public_html/proyecto4/uptt/templates/pnf_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7a4517b7f5e9_87022936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9eff03559426b8718241ccd40c5ccd398626c4d' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/pnf_agregar.html',
      1 => 1583782345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7a4517b7f5e9_87022936 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php
/* Smarty version 3.1.30, created on 2020-03-06 00:19:12
  from "/home/palencia/public_html/proyecto4/uptt/templates/sedes_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e61cf40058621_55488445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '849ae8439e129b7e6f5a676ba3a3a03daeb36a0a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/sedes_agregar.html',
      1 => 1583466180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e61cf40058621_55488445 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Agreagar Nucleo o Dependencia</h2>
                    <form 
                    	action="proc_agregar_sede.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="sedes_agregar"
                    	name="sedes_agregar">
                    
                     	                    
                      	<div class="form-group">
                          <label for="nombre_largo">Nombre Completo</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo de La Sede" 
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
                        		title="Escriba el Nombre Abreviado de La Sede" 
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

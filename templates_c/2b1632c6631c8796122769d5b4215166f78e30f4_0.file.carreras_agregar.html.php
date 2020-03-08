<?php
/* Smarty version 3.1.30, created on 2020-03-06 00:29:21
  from "/home/palencia/public_html/proyecto4/uptt/templates/carreras_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e61d1a1ee7282_31333204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1632c6631c8796122769d5b4215166f78e30f4' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/carreras_agregar.html',
      1 => 1583466180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e61d1a1ee7282_31333204 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Agreagar Carrera</h2>
                    <form 
                    	action="proc_agregar_carrera.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="carreras_agregar"
                    	name="carreras_agregar">
                    
                     	                    
                      	<div class="form-group">
                          <label for="nombre_largo">Nombre Completo</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo de La Carrera" 
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
                        		title="Escriba el Nombre Abreviado de La Carrera" 
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

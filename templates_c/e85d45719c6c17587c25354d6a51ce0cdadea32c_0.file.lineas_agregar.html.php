<?php
/* Smarty version 3.1.30, created on 2020-07-20 14:33:37
  from "/home/veronica/public_html/uptt/modulos/linea_de_investigacion/templates/lineas_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f15e381a8ef99_61028726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85d45719c6c17587c25354d6a51ce0cdadea32c' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/linea_de_investigacion/templates/lineas_agregar.html',
      1 => 1585357591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f15e381a8ef99_61028726 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Agreagar Línea de Investigación</h2>
                    <form 
                    	action="proc_lineas_agregar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="lineas_agregar"
                    	name="lineas_agregar">
                    
                     	                    
                      	<div class="form-group">
                          <label for="nombre">Nombre Completo</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo de la Línea" 
                            required="required" 
                            class="form-control" 
                            id="nombre" 
                            name="nombre"
                            placeholder="Univerisdad Politecnica Mario.....">
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

<?php
/* Smarty version 3.1.30, created on 2020-03-24 13:10:03
  from "/home/palencia/public_html/proyecto4/uptt/templates/lineas_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7a3eeb459499_23326261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c34d535ab10d3801b960bd2873edfac43c70654' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/lineas_agregar.html',
      1 => 1585069017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7a3eeb459499_23326261 (Smarty_Internal_Template $_smarty_tpl) {
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

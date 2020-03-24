<?php
/* Smarty version 3.1.30, created on 2020-03-23 14:00:42
  from "/home/veronica/public_html/uptt/templates/lineas_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e78f94a0d7e69_44037068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '050b7c3034f5f4e7c4437773b422a2080a516737' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/lineas_agregar.html',
      1 => 1584943646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e78f94a0d7e69_44037068 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Agreagar Centro de Investigación</h2>
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

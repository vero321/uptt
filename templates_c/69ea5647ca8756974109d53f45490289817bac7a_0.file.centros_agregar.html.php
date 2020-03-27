<?php
/* Smarty version 3.1.30, created on 2020-03-26 15:26:16
  from "/home/jose/public_html/proyecto4/uptt/templates/centros_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7d01d83a15c0_19369504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ea5647ca8756974109d53f45490289817bac7a' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/centros_agregar.html',
      1 => 1585239458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d01d83a15c0_19369504 (Smarty_Internal_Template $_smarty_tpl) {
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
                    	action="proc_centros_agregar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="centros_agregar"
                    	name="centros_agregar">
                    
                     	                    
                      	<div class="form-group">
                          <label for="nombre">Nombre Completo</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo del Centro" 
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

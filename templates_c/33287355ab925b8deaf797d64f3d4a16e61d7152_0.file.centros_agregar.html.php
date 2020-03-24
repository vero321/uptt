<?php
/* Smarty version 3.1.30, created on 2020-03-23 00:34:43
  from "/home/veronica/public_html/uptt/templates/centros_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e783c635afe28_27697210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33287355ab925b8deaf797d64f3d4a16e61d7152' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/centros_agregar.html',
      1 => 1584938080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e783c635afe28_27697210 (Smarty_Internal_Template $_smarty_tpl) {
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

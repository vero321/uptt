<?php
/* Smarty version 3.1.30, created on 2021-01-27 12:13:01
  from "/home/veronica/public_html/uptt/modulos/trayectos_pnf/templates/nivel_instruccion_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6011910df0a405_71049351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd406868c7c098a77dce5e6f872dff04d55179838' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/trayectos_pnf/templates/nivel_instruccion_agregar.html',
      1 => 1611763889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6011910df0a405_71049351 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="nivel_instruccion"> 
                  <h2>Agreagar nível de instrucción</h2>
                    <form 
                    	action="proc_nivel_instruccion_agregar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="nivel_instruccion"
                    	name="nivel_instruccion">
                    
                     	                    
                      	<div class="form-group">
                          <label for="nombre">Nível de instrucción</label>
                          <input 
                            type="text" 
                            title="Escriba el nombre del nível de instruccion" 
                            required="required" 
                            class="form-control" 
                            id="nombre_nivel_instruccion" 
                            name="nombre_nivel_instruccion"
                            placeholder="Ingeniero en.....">
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

<?php
/* Smarty version 3.1.30, created on 2020-09-28 18:08:56
  from "/home/veronica/public_html/uptt/modulos/secciones/templates/seccion_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f725ef8766708_68900421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2822c64abea3e718f9502e17dd5ef1addc1f6e60' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/secciones/templates/seccion_agregar.html',
      1 => 1597320289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f725ef8766708_68900421 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1 align="center">Registrar una seccion</h1>
                    <form 
                    	action="proc_secciones_agregar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="registro_seccion"
                    	name="registro_seccion">
                      <input type="hidden" name="id_trayecto" value="<?php echo $_smarty_tpl->tpl_vars['id_trayecto']->value;?>
">
                    
                     	<div class="form-group">
                        	<label for="id">Nombre</label>
                        	 <input 
                            type="text" 
                            title="Escriba la ci del Usuario" 
                            required="required" 
                            class="form-control" 
                            id="nombre" 
                            name="nombre" 
                            placeholder="A1"
                            >
                      	</div>                        
                    	<div class="form-group">
          							<input 
          								class="btn-enviar btn btn-sm btn-primary" 
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

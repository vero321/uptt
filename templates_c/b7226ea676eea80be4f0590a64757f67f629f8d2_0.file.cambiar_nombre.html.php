<?php
/* Smarty version 3.1.30, created on 2021-01-16 23:31:18
  from "/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/cambiar_nombre.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6003af86c96b34_27955220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7226ea676eea80be4f0590a64757f67f629f8d2' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/cambiar_nombre.html',
      1 => 1600298168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6003af86c96b34_27955220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-12">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1 align="center">Cambiar nombre</h1>
                    <form 
                    	action="proc_cambiar_nombre.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="registro_seccion"
                    	name="registro_seccion">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
                            placeholder="escriba un nombre"
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

</div>  
</div>
<?php }
}

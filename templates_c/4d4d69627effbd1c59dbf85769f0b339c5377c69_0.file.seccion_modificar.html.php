<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:46:23
  from "/home/palencia/public_html/proyecto4/uptt/modulos/secciones/templates/seccion_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008eaff3f2961_95965991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d4d69627effbd1c59dbf85769f0b339c5377c69' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/secciones/templates/seccion_modificar.html',
      1 => 1611073924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008eaff3f2961_95965991 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1 align="center">Modificar una seccion</h1>
                    <form 
                    	action="proc_secciones_modificar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="registro_seccion"
                    	name="registro_seccion">
                      	<input type="hidden" name="id_seccion" value="<?php echo $_smarty_tpl->tpl_vars['id_seccion']->value;?>
">
                      	<input type="hidden" name="id_trayecto" value="<?php echo $_smarty_tpl->tpl_vars['id_trayecto']->value;?>
">
                    
                     	<div class="form-group">
                        	<label>Nombre</label>
                        	 <input 
                            type="text" 
                            title="Escriba la ci del Usuario" 
                            required="required" 
                            class="form-control" 
                            id="nombre" 
                            name="nombre" 
                            value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value['nombre'];?>
"
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

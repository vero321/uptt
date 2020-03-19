<?php
/* Smarty version 3.1.30, created on 2020-03-19 00:30:52
  from "/home/palencia/public_html/proyecto4/uptt/templates/agregar_admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e72f57c35df18_63634032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f1d1a67be9a9f358a6562dae9376f784a3ae26' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/agregar_admin.html',
      1 => 1584587072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e72f57c35df18_63634032 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h1 align="center">Registrar Usuario</h1>
                    <form 
                    	action="proc_usuarios_registrar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="registro_usuario"
                    	name="registro_usuario">
                    
                     	<div class="form-group">
                        	<label for="id">Cedula</label>
                        	 <input 
                            type="text" 
                            title="Escriba la ci del Usuario" 
                            required="required" 
                            class="form-control" 
                            id="id" 
                            name="id" 
                            placeholder="12345678">
                      	</div>

                      <div class="form-group">
                          <label for="correo">Correo Electrónico</label>
                           <input 
                            type="email" 
                            title="Escriba su Correo Electrónico" 
                            required="required" 
                            class="form-control" 
                            id="correo" 
                            name="correo" 
                            placeholder="login@correo.com">
                        </div>

                          <h5>Rol del usuario</h5>
                        <div class="form-group">
                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="form-check">

                              <label class="form-check-label">
                                <input type="checkbox"  class="form-check-input"  
                                name="rol[]" value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

                              </label>
                            </div>
                          <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
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

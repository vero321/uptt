<?php
/* Smarty version 3.1.30, created on 2020-04-18 20:16:49
  from "/home/jose/public_html/proyecto4/uptt/templates/agregar_admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e9b9871c45820_84621559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3842052ef38583d55866beb0db1fbd7081aed08' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/agregar_admin.html',
      1 => 1587255401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9b9871c45820_84621559 (Smarty_Internal_Template $_smarty_tpl) {
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
                            placeholder="12345678"
                            >
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
                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="form-row">
                              <div class="form-group  col-md-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox"  class="form-check-input"  
                                    name="rol[]" value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

                                  </label>
                                </div>
                              </div>

                              <?php if ($_smarty_tpl->tpl_vars['datos']->value['nivel'] == 1000 || $_smarty_tpl->tpl_vars['datos']->value['nivel'] == 900) {?>
                                <?php if ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nivel'] != 1000 && $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nivel'] != 900) {?>
                                  <div class="form-group  col-md-4">
                                    <select id="nucleos" name="nucleos['<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
']=>" class="form-control- small">
                                      <option selected>Selecione Nucleo</option>
                                      
                                      <?php
$__section_n_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nucleos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_1_total = $__section_n_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_1_total != 0) {
for ($__section_n_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_1_iteration <= $__section_n_1_total; $__section_n_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                                      <option value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['nombre_corto'];?>
</option>
                                      <?php
}
}
if ($__section_n_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_1_saved;
}
?>
                                    </select>
                                  </div>
                                  <div class="form-group  col-md-4">
                                    <select id="pnf" name="pnf['<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
']=>" class="form-control- small">
                                      <option selected>Selecione PNF</option>
                                      <?php
$__section_p_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_p']) ? $_smarty_tpl->tpl_vars['__smarty_section_p'] : false;
$__section_p_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pnf']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_2_total = $__section_p_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_2_total != 0) {
for ($__section_p_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_2_iteration <= $__section_p_2_total; $__section_p_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
                                              <option value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['nombre_corto'];?>
</option>
                                      <?php
}
}
if ($__section_p_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_p'] = $__section_p_2_saved;
}
?>
                                    </select>
                                  </div>
                                <?php }?>
                              <?php } else { ?>
                                <input type="hidden" name="nucleo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id_nucleo'];?>
">
                                <input type="hidden" name="pnf" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id_pnf'];?>
">
                                <?php }?>
                              </div>
                          <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

                    	<div class="form-group">
          							<input 
          								class="btn-enviar btn btn-sm btn-primary" 
          								type="submit" 
          								name="enviar" 
          								value="Registrar">
                    	</div>
                    </form>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
<form method="post" id="formulario">
  <div class="form-group">
    <select class="form-control" name="form" id="mSelect">
      <option value="0">-Seleccione-</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
    <br>
    <input type="button" id="options" value="enviar" class="btn btn-danger" disabled/>
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

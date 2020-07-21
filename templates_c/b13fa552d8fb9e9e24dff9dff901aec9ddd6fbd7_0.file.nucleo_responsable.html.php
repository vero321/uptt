<?php
/* Smarty version 3.1.30, created on 2020-07-20 20:32:54
  from "/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleo_responsable.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1637b6329937_87197324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b13fa552d8fb9e9e24dff9dff901aec9ddd6fbd7' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleo_responsable.html',
      1 => 1595016174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera_interna.html' => 1,
    'file:../../menu/menu_lateral.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f1637b6329937_87197324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- incluye menu y agrega el espasio de trbajo-->

<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:../../menu/menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9" style="margin-top: 50px;" >



<!--finaliza-->
			<h2>Asinar responsable de <?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>
</h2>
          <?php if (isset($_smarty_tpl->tpl_vars['respuesta']->value)) {?>
          	<div class="alert alert-danger" role="alert">
            No se encuentra un rol con los permisos para ser Responsable de un Núcleo comuniquese con el administrador para que asigne un rol con los privilegios necesarios
          </div>
          	<?php } else { ?>
				<div class="jumbotron jumbo_buscar">
                <div class="container">  
                  <form action="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['id'];?>
" method="POST">
                      <div class="input-group">
                        <input id="p" name="p" type="text" class="form-control" placeholder="12345678 o coreo@correo.com" aria-describedby="basic-addon1" required >
                        <span class="input-group-addon" id="basic-addon1" style="padding:0 12px;"><i class="fa fa-search"></i></span>
                      </div>
                  </form>
                </div>
              </div>
          <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
			    <section id="home" class="text-center"></section>
			        <section id="intro">
			            <div class="container">
			              <div class="centro"> 
			              	<h3>Selecione un Usuario</h3>
							<form 
			                      action="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['id'];?>
" 
			                      method="POST" 
			                      class="px-4 py-3" 
			                      id="Asignar_responsable_de_nucleo"
			                      name="Asignar_responsable_de_nucleo">
			                    <div class="form-group">
			                        <input type="hidden" name="id_nucleo" value="<?php echo $_smarty_tpl->tpl_vars['nucleos']->value['id'];?>
">

			                    	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usuarios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			                        <div class="form-check">
			                              <label class="form-check-label">
			                                <input type="radio"  class="form-check-input"  
			                                name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
			                                <?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['correo'];?>

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
			                          value="Siguiente">
		                      </div>
			                </form>
			            </div>
			        </div>
			    </section>
            <?php }?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

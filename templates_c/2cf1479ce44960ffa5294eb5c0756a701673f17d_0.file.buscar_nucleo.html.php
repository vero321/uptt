<?php
/* Smarty version 3.1.30, created on 2021-01-14 12:25:49
  from "/home/palencia/public_html/proyecto4/uptt/modulos/buscar/templates/buscar_nucleo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6000708d5086d3_89125764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf1479ce44960ffa5294eb5c0756a701673f17d' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/buscar/templates/buscar_nucleo.html',
      1 => 1602982193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera.html' => 1,
    'file:../../pie/pie_externo.html' => 1,
  ),
),false)) {
function content_6000708d5086d3_89125764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-8 offset-2">
          <div class="centro">
           <h1 class="titulo" title="Nucleo Beatriz"><?php echo $_smarty_tpl->tpl_vars['nucleo']->value['nombre_corto'];?>
</h1>
            <div class=""></div>
						 
					
				
					</div>
				</div>
	</section>



<!--Enlaces a los distintos Nucleos -->

<div class="container-fluid ">
	<div class="row">
		<div class="col-md-12">
			<?php if (count($_smarty_tpl->tpl_vars['pnf']->value) > 0) {?>
			<div class="row">
			<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pnf']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a href="NUES_PNF.php"><i class="fa fa-leanpub fa-5x nucleo"></i>
							<h5 class="nucleo"><?php echo $_smarty_tpl->tpl_vars['pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
</h5></a>
					</div>
				</div>
			<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
			</div>
			<?php } else { ?>
			<div class="col-md-6">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  El nucleo aun no tiene un PNF registrado
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_externo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

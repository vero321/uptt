<?php
/* Smarty version 3.1.30, created on 2021-01-26 11:04:01
  from "/home/veronica/public_html/uptt/modulos/trayectos_secciones/templates/trayectos_secciones.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60102f61472df2_81469575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa8e2109cd212319fdf0b1348bad03ebbf14727' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/trayectos_secciones/templates/trayectos_secciones.html',
      1 => 1610626348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_60102f61472df2_81469575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../inicio/inicio_interno.php">Repo</a></li>
	    <li class="breadcrumb-item"><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">Panel <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Secciones</li>
	</ol>	

	<div class="card">

		<div class="card-header">
			<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
			<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" id="nav_<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
-tab" data-toggle="tab" href="#nav_<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" role="tab" aria-controls="nav_<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['trayecto'];?>
</a>
			  </li>
			<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
			 
			</ul>

		</div>
		<div class="card-body p-0">
			
			<div class="tab-content" id="myTabContent">
			<?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			  <div class="tab-pane fade " id="nav_<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" role="tabpanel" aria-labelledby="nav_<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
-tab">

			  	<div class="list-group list-group-flush">
				  <?php
$__section_ii_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ii']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii'] : false;
$__section_ii_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos_secciones']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ii_2_total = $__section_ii_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = new Smarty_Variable(array());
if ($__section_ii_2_total != 0) {
for ($__section_ii_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] = 0; $__section_ii_2_iteration <= $__section_ii_2_total; $__section_ii_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']++){
?>
				    <?php
$__section_iii_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_iii']) ? $_smarty_tpl->tpl_vars['__smarty_section_iii'] : false;
$__section_iii_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos_secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_iii_3_total = $__section_iii_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_iii'] = new Smarty_Variable(array());
if ($__section_iii_3_total != 0) {
for ($__section_iii_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index'] = 0; $__section_iii_3_iteration <= $__section_iii_3_total; $__section_iii_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index']++){
?>
				  		<?php if ($_smarty_tpl->tpl_vars['trayectos_secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index'] : null)]['id_trayecto'] == $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_trayecto']) {?>
						  <a href="propuesta_evaluando.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['trayectos_secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index'] : null)]['id_trayecto'];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
" class="list-group-item list-group-item-action ">
						    	<?php echo $_smarty_tpl->tpl_vars['trayectos_secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iii']->value['index'] : null)]['nombre'];?>

						  </a>
				  		<?php }?>
				    <?php
}
}
if ($__section_iii_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_iii'] = $__section_iii_3_saved;
}
?>
				  <?php
}
}
if ($__section_ii_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = $__section_ii_2_saved;
}
?>
				</div>

			  </div>
			<?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
			  
			</div>

		</div>

	</div>

</div>
   
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

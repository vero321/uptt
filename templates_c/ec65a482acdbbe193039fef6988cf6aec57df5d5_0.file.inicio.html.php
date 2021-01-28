<?php
/* Smarty version 3.1.30, created on 2021-01-27 22:14:16
  from "/home/palencia/public_html/proyecto4/uptt/modulos/inicio/templates/inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60121df89cb8b4_78320439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec65a482acdbbe193039fef6988cf6aec57df5d5' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/inicio/templates/inicio.html',
      1 => 1611800053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera.html' => 1,
    'file:../../pie/pie_externo.html' => 1,
  ),
),false)) {
function content_60121df89cb8b4_78320439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-8 offset-md-2 col-sm-12">
          <div class="centro">
            
            <a class="enlace-oscuro" data-toggle="collapse" href="#explicacion" aria-expanded="false" aria-controls="explicacion">
            <h1 class="font-weight-bold mt-3 pt-2" title="Breve explicación sobre el Repositorio">Repositorio <br> institucional</h1></a>
            <div class=""></div>
			<div class="collapse " id="explicacion">
			    <div class="">
			      Explicación sobre el Repositorio Institucional.........
			    </div>
			</div>
		</div>


<!--Formulario de Busqueda -->
					
				<!--img src="../../imagenes/logo_ini.png" style="padding-top: 50px;" class="rounded float-left" alt="logo"-->
				<img src="../../imagenes/uptt.png" class="rounded float-right" alt="uptt">
				<br><br><br>
				<form class="form-group form-portada" action="../buscar/buscar.php" method="get">
				  <div class="form-group" padding="2" >
						<label class="sr-only" for="texto">Buscar</label>
						
						<div class="input-group">
							<input type="text" class="form-control" name="texto" id="texto" placeholder="Texto a buscar" required="required">
							<input 
								class="btn btn-light float-right" 
								type="submit" 
								name="enviar" 
								value="Buscar">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							<small class="form-text text-muted text-muted-label">
							Para buscar por título, resumen o palabras clave, escribe aquí y 
							haz click en [Buscar]. Si desea una búsqueda más específica, haz
							click en [Avanzada].
						</small>

						</div>
						</div>
					</div>
					<input type="hidden" name="avanzada" value="NO">
				</form>
				  <a class="link float-left btn btn-light" href="buscar_avanzada.php"value="Avanzada"><i class="fa fa-search-plus fa-lg"></i>Búsqueda Avanzada</a>
		</div>
	</div>
			
	</section>
	<br><br>

<!--Final del formulario de Busqueda -->


<!--Enlaces a los distintos Nucleos -->

<div class="container-fluid ">
	<div class="row">
		<div class="col-md-10 offset-2">
			<div class="row">
			<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nucleos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<div class="col-sm-4 col-md-2">
					<div class="card border-0" align="center">
						<a class="nucleo" href="../buscar/buscar_nucleo.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo"><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
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
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_externo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

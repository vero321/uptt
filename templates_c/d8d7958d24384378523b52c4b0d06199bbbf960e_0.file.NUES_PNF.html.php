<?php
/* Smarty version 3.1.30, created on 2020-03-11 18:45:15
  from "/home/veronica/public_html/uptt/templates/NUES_PNF.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6969fbc309d0_41486301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d7958d24384378523b52c4b0d06199bbbf960e' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/NUES_PNF.html',
      1 => 1583966714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e6969fbc309d0_41486301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-10 offset-1">
          <div class="centro">
           <h2 class="subtitulo" title="Nucleo Beatriz">NUES PNF</h2>
            <div class=""></div>
							<form class="form-group form-portada" action="buscar.php" method="get">
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
							<a class="link float-left btn btn-light" href="buscar_avanzada.php"value="Avanzada"><i class="fa fa-search-plus fa-lg"></i>Búsqueda Avanzada</a>
						</div>
					</div>
					</div>
					<input type="hidden" name="avanzada" value="NO">
				</form> 
					
				
					</div>
				</div>
	</section>



<!--Enlaces a los distintos Nucleos -->

<div class="container-fluid ">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-database fa-5x nucleo"></i>
							<h5 class="nucleo">Trayecto I</h5></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-database fa-5x nucleo"></i><h5 class="nucleo">Trayecto II</h5></a>
					</div></a>
				</div>
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-database fa-5x nucleo"></i><h5 class="nucleo">Trayecto III</h5></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-database fa-5x nucleo"></i><h5 class="nucleo">Trayecto IV</h5></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

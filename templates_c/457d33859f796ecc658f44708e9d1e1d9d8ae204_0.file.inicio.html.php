<?php
/* Smarty version 3.1.30, created on 2020-04-22 11:33:54
  from "/home/veronica/public_html/uptt/templates/inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea063e25fa5e0_51541475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457d33859f796ecc658f44708e9d1e1d9d8ae204' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/inicio.html',
      1 => 1584994338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5ea063e25fa5e0_51541475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-8 offset-md-2 col-sm-12">
          <div class="centro">
            
            <a class="enlace-oscuro" data-toggle="collapse" href="#explicacion" aria-expanded="false" aria-controls="explicacion">
            <h1 class="titulo" title="Breve explicación sobre el Repositorio">repositorio institucional</h1></a>
            <div class=""></div>
						  <div class="collapse " id="explicacion">
						    <div class="">
						      Explicación sobre el Repositorio Institucional.........
						    </div>
						  </div>
					</div>


<!--Formulario de Busqueda -->
					
				<img src="./imagenes/logo_ini.png" style="padding-top: 50px;" class="rounded float-left" alt="logo">
				<img src="./imagenes/uptt.png" class="rounded float-right" alt="uptt">
				<br><br><br>
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
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a class="nucleo" href="NUES_beatriz.php"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">beatriz</h5></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a class="nucleo" href="NUES_san_luis.php"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">san luis</h5></a>
					</div></a>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a class="nucleo" href="NUES_bocono.php"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">bocono</h5></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a class="nucleo" href="NUES_trujillo.php"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">trujillo</h5></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a class="nucleo" href="NUES_dividive.php"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">dividive</h5></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

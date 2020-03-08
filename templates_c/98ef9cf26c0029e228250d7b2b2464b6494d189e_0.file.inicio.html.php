<?php
/* Smarty version 3.1.30, created on 2020-03-05 17:52:49
  from "/home/palencia/public_html/proyecto4/uptt/templates/inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6174b1c2c371_78203151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ef9cf26c0029e228250d7b2b2464b6494d189e' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/inicio.html',
      1 => 1583325965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e6174b1c2c371_78203151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-8 offset-2">
          <div class="centro">
            <a class="enlace-oscuro" data-toggle="collapse" href="#explicacion" role="button" aria-expanded="false" aria-controls="explicacion"><h1 title="Breve explicación sobre el Repositorio" style="margin-top: 20px;">Repositorio Institucional</h1></a>
            <div class=""></div>
						  <div class="collapse " id="explicacion">
						    <div class="">
						      Explicación sobre el Repositorio Institucional.........
						    </div>
						  </div>
					</div>


<!--Formulario de Busqueda -->
					
				<img src="./imagenes/logo.png" style="padding-top: 38px;" class="rounded float-left" alt="logo">
				<img src="./imagenes/uptt.png" class="rounded float-right" alt="uptt">
				<br><br><br>
				<form class="form-group form-portada" action="buscar.php" method="get">
				  <div class="form-group" padding="2" >
						<label class="sr-only" for="texto">Buscar</label>
						<small class="form-text text-muted text-muted-label">
							Para buscar por título, resumen o palabras clave, escribe aquí y 
							haz click en [Buscar]. Si desea una búsqueda más específica, haz
							click en [Avanzada].
						</small>

						<div class="input-group">
							<input type="text" class="form-control" name="texto" id="texto" placeholder="Texto a buscar" required="required">
							<input 
								class="btn btn-primary float-right" 
								type="submit" 
								name="enviar" 
								value="Buscar">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</div>
						</div>
					</div>
					<input type="hidden" name="avanzada" value="NO">
				</form>
				  <a class="link float-left" href="buscar_avanzada.php"value="Avanzada">Búsqueda Avanzada</a>
		</div>
	</div>
			
	</section>
	<br><br>

<!--Final del formulario de Busqueda -->


<div class="container-fluid ">
	<div class="row">
		<div class="col-md-10 offset-2">
			<div class="row">
				<div class="col-md-2">
					<div class="card">
						<a href="#"><img class="card-img-top border-0" alt="Bootstrap Thumbnail First" src="./imagenes/beatriz.jpg" /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card">
						<a href="#"><img class="card-img-top" alt="Bootstrap Thumbnail First" src="./imagenes/san_luis.jpg" /></a>
					</div></a>
				</div>
				<div class="col-md-2">
					<div class="card">
						<a href="#"><img class="card-img-top" alt="Bootstrap Thumbnail First" src="./imagenes/trujillo.jpg" /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card">
						<a href="#"><img class="card-img-top" alt="Bootstrap Thumbnail Second" src="./imagenes/bocono.jpg" /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card">
						<a href="#"><img class="card-img-top" alt="Bootstrap Thumbnail Third" src="./imagenes/dividive.jpg" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

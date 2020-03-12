<?php
/* Smarty version 3.1.30, created on 2020-03-11 12:00:33
  from "/home/veronica/public_html/uptt/templates/buscar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e690b210ce432_33925880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9b190371ff8fa91587ae4507fb98bb81f9227d' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/buscar.html',
      1 => 1583942430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:modal/modal_box.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e690b210ce432_33925880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-10 offset-1">
          <div class="centro">
           <h2 class="subtitulo" title="Nucleo Beatriz">Resultados de la Búsqueda</h2>
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
		<div class="col-md-11 offset-1">
			<div class="row">
				<div class="buscar-item">  
        <div class="buscar-titulo">  
            <a 
              data-href="modal_busqueda.php?id=<?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"  
              class="mimodal"
              title="Detalles"
              >Título&nbsp;<i class="fa fa-share-square-o"></i></a>
        </div> 

        <span class="mb-1 text-muted"><strong>Autores</strong> </span>
        <span class="mb-1 text-muted">Mes, Año</span>

        <p class="text-justify mb-auto">Resumen</p>

        <div >
          <strong> Palabras Clave:</strong> <span class="buscar-pclave">Palabras.....</span>
        </div>
        
        </div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

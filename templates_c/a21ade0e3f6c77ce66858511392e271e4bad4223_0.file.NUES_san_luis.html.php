<?php
/* Smarty version 3.1.30, created on 2020-03-09 17:06:43
  from "/home/veronica/public_html/uptt/templates/NUES_san_luis.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e66afe3e46464_49314875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21ade0e3f6c77ce66858511392e271e4bad4223' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/NUES_san_luis.html',
      1 => 1583787979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e66afe3e46464_49314875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-8 offset-2">
          <div class="centro">
           <h1 class="titulo" title="Nucleo Beatriz">NUES san luis</h1>
            <div class=""></div>
						 
					
				
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
						<a href="#"><i class="fa fa-leanpub fa-5x nucleo"></i>
							<h5 class="nucleo">administración</h5></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-leanpub fa-5x nucleo"></i><h5 class="nucleo">turismo</h5></a>
					</div></a>
				</div>
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-leanpub fa-5x nucleo"></i><h5 class="nucleo">electricidad</h5></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-leanpub fa-5x nucleo"></i><h5 class="nucleo">informática</h5></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-leanpub fa-5x nucleo"></i><h5 class="nucleo">construcción civil</h5></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

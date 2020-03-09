<?php
/* Smarty version 3.1.30, created on 2020-03-09 09:19:18
  from "/home/veronica/public_html/uptt/templates/beatriz.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e66425645c5a6_09114973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b3689ef33677a1218fb725969d1bd1157e2ab0' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/beatriz.html',
      1 => 1583759956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e66425645c5a6_09114973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="home" class="text-center"></section>
  <section id="intro">
    <div class="container">
      <div class="row text-center" >
        <div class="col-md-8 offset-2">
          <div class="centro">
           <h1 class="titulo" title="Nucleo Beatriz">nucleo beatriz</h1>
            <div class=""></div>
						 
					
				
					</div>
				</div>
	</section>



<!--Enlaces a los distintos Nucleos -->

<div class="container-fluid ">
	<div class="row">
		<div class="col-md-10 offset-2">
			<div class="row">
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a href="beatriz.php"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">beatriz</h5></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">san luis</h5></a>
					</div></a>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">bocono</h5></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">trujillo</h5></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card border-0" align="center">
						<a href="#"><i class="fa fa-university fa-5x nucleo"></i><h5 class="nucleo">dividive</h5></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

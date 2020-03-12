<?php
/* Smarty version 3.1.30, created on 2020-03-12 17:36:05
  from "/home/palencia/public_html/proyecto4/uptt/templates/buscar_avanzada.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6aab455455c2_39204855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f27e08a7338c17c9b26a5982b5a76abbf8c3c58e' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/buscar_avanzada.html',
      1 => 1584047659,
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
function content_5e6aab455455c2_39204855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container col-md-8 col-md-offset-2">
  <div class="row">
      <div class="col">
        <form class="form"
              action="buscar.php"
              method="get"
              id="frm_avanzada"
              style="margin-top: 1em!important;"
              >           
              <div id="field_wrapper">
              <div class="input-group form-row" style="margin-bottom: 1em!important;">
                <div class="col-3">
                    <select id="campo1" name="campo[]" class="form-control">
                    </select>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control"
                    id="texto1"  data-sel='1' name="texto[]" placeholder="Buscar">
                </div>
                <div class="col-1">
                    <button href="##" class="btn btn-sm btn-outline-primary" type="button"
                    id="btn-agregar-fila"><span class="fa fa-plus"></span></button>
                </div>
              </div>
            </div>
	            <input 
							class="btn btn-light float-right" 
							type="submit" 
							name="enviar" 
							value="Buscar">

							<div class="input-group-addon">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							<a class="link float-left btn btn-light" href="buscar.php"value="Sencilla"><i class="fa fa-search fa-lg"></i>Búsqueda Sencilla</a>
							</div>
    </div>
  </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

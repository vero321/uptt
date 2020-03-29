<?php
/* Smarty version 3.1.30, created on 2020-03-29 10:44:14
  from "/home/palencia/public_html/proyecto4/uptt/templates/operador_nucleo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e80b43ec98503_55599171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072b38cbfe613e99f4f145fa59ffbde0f8377bf1' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/operador_nucleo.html',
      1 => 1584047659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e80b43ec98503_55599171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container">
    <div class="row">
        <div class="col-sm-2"> 

            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="col-sm-10">



<!--finaliza-->
			

            <div style="margin-top: 40px;" class="row">
                <div class="col-sm-4">
                    <div class=" text-white bg-primary " style="max-width: 20rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-user fa-fw"></i><small style="margin-left: 20px; margin-right: 20px;">Operadores</small>07</h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    
                    <div class=" text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h3 class="card-title"> <i class="fa fa-university"></i><small style="margin-left: 20px; margin-right: 20px;">PNF</small>07</h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>  
                </div>  

              
            </div>
              
          </div>
        </div>
      </div>

<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

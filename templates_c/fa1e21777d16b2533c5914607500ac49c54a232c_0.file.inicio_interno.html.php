<?php
/* Smarty version 3.1.30, created on 2020-03-05 09:00:04
  from "/home/palencia/public_html/proyecto4/uptt/templates/inicio_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e60f7d4db49c2_37866716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa1e21777d16b2533c5914607500ac49c54a232c' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/inicio_interno.html',
      1 => 1583368601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e60f7d4db49c2_37866716 (Smarty_Internal_Template $_smarty_tpl) {
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
            <br>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header"></div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['usurios']->value;?>
 <i class="fa fa-user fa-fw"></i><small>Usuarios</small></h4>
                    <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
              </div>
            </div>
        </div>
    </div>
</div>

     

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2020-03-29 12:32:48
  from "/home/veronica/public_html/uptt/templates/distribuidor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e80cdb0cb2b58_72138374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e0cfd1ad0d29f054e2a9fee888476627f6a3722' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/distribuidor.html',
      1 => 1585499168,
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
function content_5e80cdb0cb2b58_72138374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<incluye menu y agrega el espasio de trbajo>
<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9 offset-3" style="margin-top: 90px;">
<!--finaliza-->
           

            <div class="row">
                    
                    <div class="card-central card text-white bg-primary mb-3" style="width: 15rem;">
                        <div class="card-body">
                            <h3 class="card-title"> <i class="fa fa-university"></i><small style="margin-left: 20px; margin-right: 20px;">Nucleos</small><?php echo $_smarty_tpl->tpl_vars['nucleos']->value;?>
</h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>  

                    <div class="card-central card text-white bg-primary mb-3" style="width: 15rem;">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-leanpub"></i><small style="margin-left: 20px; margin-right: 20px;">PNF</small><?php echo $_smarty_tpl->tpl_vars['pnf']->value;?>
 </h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>
                     <div class="card-central card text-white bg-primary mb-3" style="width: 15rem;">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-sitemap"></i><small style="margin-left: 20px; margin-right: 20px;">Roles</small><?php echo $_smarty_tpl->tpl_vars['roles']->value;?>
</h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>
                    <div class="card-central card text-white bg-primary mb-3" style="width: 15rem;">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-users"></i><small style="margin-left: 20px; margin-right: 20px;">Usuarios</small><?php echo $_smarty_tpl->tpl_vars['usuarios']->value;?>
</h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>

                    <div class="card-central card text-white bg-primary mb-3" style="width: 15rem;">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-area-chart"></i><small style="margin-left: 20px; margin-right: 20px;">Líneas de Investigación</small><?php echo $_smarty_tpl->tpl_vars['lineas']->value;?>
</h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>

                    <div class="card-central card text-white bg-primary mb-3" style="width: 15rem;">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-building"></i><small style="margin-left: 20px; margin-right: 20px;">Centros de Investigación</small><?php echo $_smarty_tpl->tpl_vars['centros']->value;?>
</h3>
                            <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a>
                        </div>
                    </div>
            </div> 
             


        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

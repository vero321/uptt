<?php
/* Smarty version 3.1.30, created on 2020-07-20 10:39:05
  from "/home/veronica/public_html/uptt/modulos/linea_de_investigacion/templates/lineas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f15ac89550ba1_70335688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b81f8177f184c337af9c939b3c21312787bba6f0' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/linea_de_investigacion/templates/lineas.html',
      1 => 1594140183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera_interna.html' => 1,
    'file:../../menu/menu_lateral.html' => 1,
    'file:../../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f15ac89550ba1_70335688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:../../menu/menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9" style="margin-top: 50px;" >




<!--finaliza-->
			
          
            <h2 class="subtitulo" align="center"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_lineas']->value;?>
</span>Líneas de Investigación
            <?php if (in_array("LINE_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
             <a class="btn btn-sm btn-outline-primary mimodal" type="button"
            data-href="lineas_agregar.php" title="Agregar Línea de Investigación"><span class="fa fa-plus"></span></a>
            <?php }?>
          </h2>

          
            

              <table style="margin-top: 30px;" class="table table-responsive-xl" id="tabla_repo">
                <thead class="thead-dark">
                  <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody class="buscar" id="personas">

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lineas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lineas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['lineas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</td>

                    <td class="text-center" style="white-space: nowrap;">
                  <?php if (in_array("LINE_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Modificar Línea de Investigación" 
                      data-href="lineas_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['lineas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <?php }?>
                  <?php if (in_array("LINE_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar Línea de Investigación" 
                      data-href="lineas_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['lineas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-trash"></i>
                    </a>
                    <?php }?>
                    </td>
                  </tr>
                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                </tbody>
              </table>
              
          </div>
        </div>
      </div>

<?php $_smarty_tpl->_subTemplateRender("file:../../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

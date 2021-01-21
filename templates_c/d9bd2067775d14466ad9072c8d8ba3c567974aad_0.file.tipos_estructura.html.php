<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:10:55
  from "/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_estructura.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e2af159811_21162044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9bd2067775d14466ad9072c8d8ba3c567974aad' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_estructura.html',
      1 => 1611073923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../navegacion/barra_nucleo_pnf.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6008e2af159811_21162044 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


 <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../inicio/inicio_interno.php">Repo</a></li>
      <li class="breadcrumb-item"><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">Panel <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</a></li>
      <li class="breadcrumb-item" ><a href="tipos.php">Tipos de documentos</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
</li>
    </ol>

    <div class="card">
    	<div class="card-header d-flex justify-content-between">
    		<h4 class="text-primary">
    			Estructura <?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>

    		</h4>
    			<?php if (in_array("TIPO_DOC_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
	             <a class="btn  btn-primary  btn-circle mimodal" type="button" 
	            data-href="estructura_agregar.php?id=<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
" title="Agregar Tipo de documento"><span class="fa fa-plus text-white"></span></a>
	            <?php }?>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
	           <table class="table" id="tabla_repo">
                <thead>
                  <tr>
                    <th>tipo de documento</th>
                    <th>Descripcion</th>
                    <th>Parte</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody>

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estructura']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</td>
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion'],30);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['parte'];?>
</td>
                    <td>
                    <?php if (in_array("TIPO_DOC_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-info btn-circle btn-sm mimodal"
                        title="Modificar tipo de documento" 
                        data-href="estructura_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-edit text-white"></i>
                      </a>
                    <?php }?>
                    <?php if (in_array("TIPO_DOC_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-danger btn-circle btn-sm mimodal"
                        title="Eliminar tipo de documento" 
                        data-href="estructura_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-trash text-white"></i>
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
</div>


<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>''), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

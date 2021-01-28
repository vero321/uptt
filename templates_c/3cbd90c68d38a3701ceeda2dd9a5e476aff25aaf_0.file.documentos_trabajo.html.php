<?php
/* Smarty version 3.1.30, created on 2021-01-27 21:03:31
  from "/home/veronica/public_html/uptt/modulos/documentos/templates/documentos_trabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60120d63c957d4_12814079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cbd90c68d38a3701ceeda2dd9a5e476aff25aaf' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/documentos/templates/documentos_trabajo.html',
      1 => 1611795810,
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
function content_60120d63c957d4_12814079 (Smarty_Internal_Template $_smarty_tpl) {
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
      <li class="breadcrumb-item active" aria-current="page">Tipos de documentos</li>
    </ol>

    <div class="card">
    	<div class="card-header d-flex justify-content-between">
    		<h4 class="text-primary card-title font-weight-bold">
    			Documentos</h4>
          <a class="btn btn-primary btn-circle btn-sm mimodal" type="button" data-href="nivel_instruccion_agregar.php?id=<?php echo $_smarty_tpl->tpl_vars['trayecto_pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Subir veredicto"><i class="fa fa-file text-white"></a></i>


    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
	           <table class="table" id="tabla_repo">
                <thead>
                  <tr>
                    <th>Fecha en que se subio</th>
                    <th>Status</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody>

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['documentos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                  	<?php if ($_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] != 'NUEVO') {?>
	                    <td><?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_subida'];?>
</td>
	                    <td><?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'];?>
</td>
                    <td>
                    <?php if (in_array("DOCR_L",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-primary btn-circle btn-sm mimodal"
                        title="Evaluar" 
                        data-href="documento_evaluar.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
">
                        <i class="fas fa-medal text-white"></i>
                      </a>
                    <?php }?>
                    <?php if (in_array("DOCR_L",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-success btn-circle btn-sm mimodal"
                        title="Ver el documento" 
                        data-href="documento_ver.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
">
                        <i class="far fa-eye text-white"></i>
                      </a>
                    <?php }?>

                    
                    </td>
                    <?php }?>
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


<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Documento"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

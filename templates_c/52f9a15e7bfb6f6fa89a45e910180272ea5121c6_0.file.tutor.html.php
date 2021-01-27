<?php
/* Smarty version 3.1.30, created on 2021-01-26 23:52:36
  from "/home/veronica/public_html/uptt/modulos/tutores/templates/tutor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6010e3841bb583_88618250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f9a15e7bfb6f6fa89a45e910180272ea5121c6' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/tutores/templates/tutor.html',
      1 => 1611710997,
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
function content_6010e3841bb583_88618250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<nav aria-label="breadcrumb" role="navigation">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../inicio/inicio_interno.php">Repo</a></li>
	    <li class="breadcrumb-item"><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">Panel <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</a></li>
	    <li class="breadcrumb-item active">Equipos</li>
	  </ol>
	</nav>

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
                      <a 
                        class="btn btn-primary btn-circle btn-sm mimodal"
                        title="Evaluar" 
                        data-href="../observaciones/añadir_observacion.php?tipo=TRABAJOS__DOCUMENTOS&fila=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
">
                        <i class="fas fa-medal text-white"></i>
                      </a>
                    
                      <a 
                        class="btn btn-success btn-circle btn-sm mimodal"
                        title="Ver el documento" 
                        data-href="../documentos/documento_ver.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
">
                        <i class="far fa-eye text-white"></i>
                      </a>

                    
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


<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Tipos de trabajo"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

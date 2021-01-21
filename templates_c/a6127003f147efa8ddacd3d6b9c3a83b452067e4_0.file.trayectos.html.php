<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:11:38
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayectos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e2dacd7301_60965205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6127003f147efa8ddacd3d6b9c3a83b452067e4' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayectos.html',
      1 => 1611073924,
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
function content_6008e2dacd7301_60965205 (Smarty_Internal_Template $_smarty_tpl) {
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
      <li class="breadcrumb-item active" aria-current="page">Trayectos</li>
    </ol>
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
	        <h2 class="text-primary"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_trayectos']->value;?>
</span>Trayetos
	          </h2>
	            <?php if (in_array("TRAY_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
	             <a class="btn btn-primary btn-circle mimodal" type="button" 
	            data-href="trayecto_agregar.php" title="Agregar trayecto"><span class="fa fa-plus text-white"></span></a>
	            <?php }?>
        </div>
        <div class="card-body">
          <div class="table-responsive">
	           <table class="table" id="tabla_repo">
                <thead>
                  <tr>
                    <th>Trayecto</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody>

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['trayecto'];?>
</td>
                    <td>
                    <?php if (in_array("TRAY_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-info btn-circle btn-sm mimodal"
                        title="Modificar trayectos" 
                        data-href="trayecto_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-edit text-white"></i>
                      </a>
                      <?php }?>
                      <?php if (in_array("TRAY_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-danger btn-circle btn-sm mimodal"
                        title="Eliminar trayectos" 
                        data-href="trayecto_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
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
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

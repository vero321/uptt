<?php
/* Smarty version 3.1.30, created on 2021-01-20 23:02:55
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008eedfc48e54_15803395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef9eb6b035c9393b9a7582b2c21afc4d6c1bf89' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pnf_nucleo/templates/pnf_nucleo.html',
      1 => 1611198174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../navegacion/barra_nucleo_pnf.html' => 1,
    'file:../../modal/modal_galeria.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6008eedfc48e54_15803395 (Smarty_Internal_Template $_smarty_tpl) {
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
    <li class="breadcrumb-item active" aria-current="page">PNF Nucleo</li>
  </ol>
  <div class="card shadow">
      <div class="card-header d-flex justify-content-between">
        <h2 class="text-primary"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_nucleos_pnf']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['nucleo']->value['nombre_corto'];?>

            <?php if (in_array("PNNU_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
             <a class="btn btn-primary mimodal btn-circle" type="button" 
            data-href="pnf_nucleo_asignar.php" title="Agregar PNF a <?php echo $_smarty_tpl->tpl_vars['nucleo']->value['nombre_corto'];?>
"><span class="fa fa-plus text-white"></span></a>
            <?php }?>
          </h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">

              <table class="display table" id="tabla_repo" style="width:100%">
                <thead>
                  <tr>
                    <th>Nombre Largo</th>
                    <th>Nombre Corto</th>
                    <th>Funciones</th>
                    <?php if (in_array("PNNU_RP",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <th>Responsable</th>
                    <?php }?>
                  </tr>
                </thead>
                <tbody class="buscar" id="personas">

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pnf_nucleo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_largo'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
</td>
                    <?php if (in_array("PNNU_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <td class="text-center" style="white-space: nowrap;">
                    <a 
                      class="btn btn-info btn-circle btn-sm mimodal"
                      title="Eliminar PNF_nucleo" 
                      data-href="pnf_nucleo_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_pnf=<?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf'];?>
">
                      <i class="fa fa-trash text-white"></i>
                    </a>
                    </td>
                    <?php }?>
                    <?php if (in_array("PNNU_RP",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'] == NULL) {?>
                          <a class="btn btn-sm btn-primary btn-circle mimodal" type="button" href="pnf_nucleo_responsable.php?id_relacion=<?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_pnf=<?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf'];?>
&id_nucleo=<?php echo $_smarty_tpl->tpl_vars['nucleo']->value['id'];?>
" title="Asignar responsable <?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
"><span class="fa fa-plus text-white"></span></a>
                        <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                      <div>
                          
                         <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>

                            <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                          <?php } else { ?>
                            <a class="thumbnail" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['persona']->value['id'];?>
"data-toggle="modal"
                             data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                             data-target="#image-gallery">
                              <img class="img-thumbnail img-user rounded-circle"
                                   src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                                   alt="User profile picture"
                                   >
                              </a>
                        <?php }?>
                        <br>
                          <?php if (isset($_smarty_tpl->tpl_vars['persona']->value['nombre'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

                          <?php } else { ?>
                          El usuario aun no actualiza sus datos
                          <?php }?>
                        <br>
                        <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                        <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                        <a href="pnf_nucleo_responsable.php?id_relacion=<?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_pnf=<?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf'];?>
&id_nucleo=<?php echo $_smarty_tpl->tpl_vars['nucleo']->value['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['pnf_nucleo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'];?>
">Cambiar</a>
                        <?php }?>
                      </td>
                    <?php }?>
                  </tr>
                </div>
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
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

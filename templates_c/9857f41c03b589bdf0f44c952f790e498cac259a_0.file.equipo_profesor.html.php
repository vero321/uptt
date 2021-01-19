<?php
/* Smarty version 3.1.30, created on 2021-01-19 10:04:41
  from "/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/equipo_profesor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6006e6f932f4a3_93701076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9857f41c03b589bdf0f44c952f790e498cac259a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/equipo_profesor.html',
      1 => 1609699599,
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
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6006e6f932f4a3_93701076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <div class="card-title text-p">
        Equipo
      </div>
    </div>
      <div class="card-body">
        <table class="table">
                <thead>
                  <tr>
                    <th>Autor</th>
                    <th>Rol</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['lider']->value['foto_perfil'] == NULL) {?>
                      <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                    <?php } else { ?>
                    <a class="thumbnail" href="#"  data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
"
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['lider']->value['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['lider']->value['foto_perfil'];?>
" alt="User profile picture">
                      </a>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['lider']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['lider']->value['apellido'];?>

                    </td>
                    <td>LIDER</td>
                    
                  <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['equipo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <td>
                   <?php if ($_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'] == NULL) {?>
                      <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                    <?php } else { ?>
                    <a class="thumbnail" href="#"  data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
" alt="User profile picture">
                      </a>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido'];?>

                  </td>
                    <td>ESTUDIANTE</td>
                    
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
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }
}

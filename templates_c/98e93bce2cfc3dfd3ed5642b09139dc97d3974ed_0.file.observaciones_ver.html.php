<?php
/* Smarty version 3.1.30, created on 2021-01-25 19:40:18
  from "/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/observaciones_ver.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600f56e296d069_12011312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98e93bce2cfc3dfd3ed5642b09139dc97d3974ed' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/observaciones_ver.html',
      1 => 1611618015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600f56e296d069_12011312 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="d-flex justify-content-center m-2 p-3">
        <h6 class="m-0 font-weight-bold text-primary">Observaciones</h6>
        <div class="card-body p-1">
            <div class="row">
              <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['datos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
              <div class="col-md-12">
                <div class="media p-3">
                  <?php if ($_smarty_tpl->tpl_vars['datos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] != NULL) {?>
                    <?php $_smarty_tpl->_assignInScope('usuario', bd_personas_datos($_smarty_tpl->tpl_vars['datos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value['foto_perfil'] == NULL) {?>
                    <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200 mr-3"></i>
                    <?php } else { ?>
                    <a class="thumbnail mr-3" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" data-toggle="modal" data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['foto_perfil'];?>
"
                    data-target="#image-gallery">
                    <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['foto_perfil'];?>
" alt="User profile picture">
                    </a>
                    <?php }?>
                  <?php }?>
                  <div class="media-body card">
                    <div class="card-body bg-gray-200">
                      <?php if ($_smarty_tpl->tpl_vars['datos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] != NULL) {?>
                        <?php $_smarty_tpl->_assignInScope('usuario', bd_personas_datos($_smarty_tpl->tpl_vars['datos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                      <?php }?>
                      
                      <h6 class=" text-gray-900 font-weight-bold"><?php if ($_smarty_tpl->tpl_vars['usuario']->value['nombre'] != NULL && $_smarty_tpl->tpl_vars['usuario']->value['apellido'] != NULL) {
echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellido'];
}?> 
                        <small><?php echo $_smarty_tpl->tpl_vars['datos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha'];?>
</small>
                      </h6>
                         
                      <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['datos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion'];?>

                      </p>
                      
                    </div>
                </div>
                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
            </div>
        </div>
    </div>
</div><?php }
}

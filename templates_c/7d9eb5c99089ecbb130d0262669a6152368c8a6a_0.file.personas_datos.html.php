<?php
/* Smarty version 3.1.30, created on 2020-07-30 16:51:39
  from "/home/veronica/public_html/uptt/modulos/personas/templates/personas_datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2332dbebb595_04807593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9eb5c99089ecbb130d0262669a6152368c8a6a' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/personas/templates/personas_datos.html',
      1 => 1596142226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar.html' => 1,
    'file:../../navegacion/cabecera.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f2332dbebb595_04807593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card card-primary card-outline center shadow" >
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-profile img-fluid rounded-circle p-5"
                         src="../../imagenes/user.png"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center"><?php echo $_smarty_tpl->tpl_vars['personas']->value[0]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['personas']->value[0]['apellido'];?>
</h3>

                  <p class="text-muted text-center"><?php echo $_smarty_tpl->tpl_vars['usuarios']->value['correo'];?>
</p>
                  <p class="text-muted text-center"><?php echo $_smarty_tpl->tpl_vars['usuarios']->value['id'];?>
</p>

                  <a class="btn btn-outline-primary  btn-block mimodal" data-href="personas_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['personas']->value[0]['id'];?>
" value="Modificar Datos">
                    <i class="fa fa-pencil-square-o fa-fw fa-lg"></i>Modificar Datos
                  </a>
                  <a class="btn btn-outline-primary  btn-block mimodal" data-href="../personas/usuarios_cambiar_clave.php">
                  <i class="fa fa-unlock-alt fa-sm fa-fw text-gray-400"></i>
                  Cambiar
                </a>

                </div>
              </div>
            </div>
          </div>
        </div>



<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 


<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2020-08-18 23:51:25
  from "/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/personas_datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3ca1bd39e0d1_75691483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '060b5185ec40eb173003ae13d6cf78d6ecbe41b2' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/personas_datos.html',
      1 => 1597808861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f3ca1bd39e0d1_75691483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div  class="container-fluid">
          <div  class="row">
            <div class="col-md-4">
              <div class="card card-primary card-outline border-left-primary shadow" >
                <div class="card-body">
                  <div class="text-center">
                    <a class="btn btn-link mimodal" data-href="../personas/usuarios_cambiar_foto.php">
                    <?php if ($_SESSION['u']['foto_perfil'] == 'NULL') {?>
                      <img class="img-thumbnail rounded-circle img-perfil"
                           src="../../imagenes/perfil/user.png"
                           alt="User profile picture"
                           >
                        </a>
                    <?php } else { ?>
                    <img class="img-thumbnail rounded-circle img-perfil"
                         src="../../imagenes/perfil/<?php echo $_SESSION['u']['foto_perfil'];?>
"
                         alt="User profile picture"
                         >
                      </a>
                    <?php }?>
                  </div>
                  <div class="text-muted text-center">
                    
                  </div>

                  <h3 class="profile-username text-center"><?php echo $_smarty_tpl->tpl_vars['personas']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['personas']->value['apellido'];?>
</h3>

                  <p class="text-muted text-center"><?php echo $_smarty_tpl->tpl_vars['usuarios']->value['correo'];?>
</p>
                  <p class="text-muted text-center"><?php echo $_smarty_tpl->tpl_vars['usuarios']->value['id'];?>
</p>

                  <a class="btn btn-outline-primary  btn-block mimodal" data-href="personas_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['personas']->value['id'];?>
" value="Modificar Datos">
                    <i class="fa fa-edit fa-fw"></i>Modificar Datos
                  </a>
                  <a class="btn btn-outline-primary  btn-block mimodal" data-href="../personas/usuarios_cambiar_clave.php">
                  <i class="fa fa-unlock-alt fa-sm fa-fw text-gray-400"></i>
                  Cambiar clave

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

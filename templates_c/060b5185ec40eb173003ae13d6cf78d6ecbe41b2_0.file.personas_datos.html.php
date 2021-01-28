<?php
/* Smarty version 3.1.30, created on 2021-01-28 09:40:42
  from "/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/personas_datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6012beda1ba6d7_99947144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '060b5185ec40eb173003ae13d6cf78d6ecbe41b2' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/personas_datos.html',
      1 => 1611106315,
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
function content_6012beda1ba6d7_99947144 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: relative;
  background-color: #D3D7CF;
  min-width: 320px;
  min-height: 50px;
  box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2);
  padding: 10px 12px 0;
  z-index: 1;
  border-radius: 30px;

}
.dropdown-content p{

  text-align: justify;
  letter-spacing: 2px;
  color:black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

        <div  class="container">
          <div  class="row">
            <div class="col-md-4">
              <div class="card card-primary card-outline border-left-primary shadow" >
                <div class="card-body">
                  <div class="text-center m-2">

                    <div class="dropdown">
                      <a class="btn btn-link mimodal" data-href="../personas/usuarios_cambiar_foto.php">
                    <?php if ($_SESSION['u']['foto_perfil'] == NULL) {?>
                      <i class="fas fa-user fa-5x img-profile rounded-circle p-2 bg-gray-200"></i>
                        </a>
                    <?php } else { ?>
                    <img class="img-thumbnail rounded-circle img-perfil"
                         src="../../imagenes/perfil/<?php echo $_SESSION['u']['foto_perfil'];?>
"
                         alt="User profile picture"
                         >
                      </a>
                    <?php }?>
                      <div class="dropdown-content">
                      <p>Al presionar la imagen, se abrirá una ventana emergente
                       que permitira modificar la misma</p>
                      </div>
                    </div>
                    
                  </div>
                  <div class="text-muted ">
                    <ul class="list-group p-1 my-3">
                      <li class="list-group-item border-0 d-flex justify-content-between align-items-center">
                        <h5 class="profile-username text-center"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['personas']->value['nombre']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['personas']->value['apellido']);?>
</h5>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between align-items-center">
                        <?php echo $_smarty_tpl->tpl_vars['usuarios']->value['id'];?>

                        <span class="fa fa-id-card"></span>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between align-items-center">
                        <?php echo $_smarty_tpl->tpl_vars['usuarios']->value['correo'];?>

                        <span class="fa fa-envelope"></span>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between align-items-center">
                        <?php echo $_smarty_tpl->tpl_vars['personas']->value['telefono'];?>

                        <span class="fa fa-phone"></span>
                      </li>
                      <li class="list-group-item border-0"><h5 class="">Sobre mí</h5><p class="mb-1"><?php echo $_smarty_tpl->tpl_vars['personas']->value['texto'];?>
</p></li>'
                    </ul>
                  </div>
                <div class="p-1 my-3">
                  <div class="dropdown">
                    <a class="btn btn-outline-primary  btn-block mimodal rounded-pill d-flex justify-content-between align-items-center" data-href="personas_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['personas']->value['id'];?>
" value="Modificar Datos">
                      Modificar Datos
                      <i class="fa fa-edit fa-fw"></i>
                    </a>
                    <div class="dropdown-content">
                    <p>Hello World!</p>
                    </div>
                  </div>

                  <div class="dropdown">
                     <a class="btn btn-outline-primary  btn-block mimodal rounded-pill d-flex justify-content-between align-items-center" data-href="../personas/usuarios_cambiar_clave.php">
                    Cambiar clave
                    <i class="fa fa-unlock-alt fa-sm fa-fw"></i>
                    </a>
                    <div class="dropdown-content">
                    <p>Hello World!</p>
                    </div>
                  </div>
                  
                    
                   
                  </div>
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

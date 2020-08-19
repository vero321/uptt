<?php
/* Smarty version 3.1.30, created on 2020-08-18 23:42:56
  from "/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/perfil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3c9fc0cc85e5_19136281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd7742224aefd0c5268e138e218d153f0ca7f07' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/perfil.html',
      1 => 1597807984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3c9fc0cc85e5_19136281 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <?php if ($_SESSION['u']['id'] == $_smarty_tpl->tpl_vars['id']->value) {?>
    <div>
    <a class="btn btn-outline-primary  btn-block mimodal" data-href="personas_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['personas']->value['id'];?>
" value="Modificar Datos">
      <i class="fa fa-edit fa-fw"></i>Modificar Datos
    </a>
    <a class="btn btn-outline-primary  btn-block mimodal" data-href="../personas/usuarios_cambiar_clave.php">
    <i class="fa fa-unlock-alt fa-sm fa-fw text-gray-400"></i>
    Cambiar clave
    </a>
    </div>
  <?php }?>
  </div>
</div>
<?php }
}

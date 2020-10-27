<?php
/* Smarty version 3.1.30, created on 2020-10-26 17:41:37
  from "/home/veronica/public_html/uptt/modulos/personas/templates/personas_cambiar_foto.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9742915401d3_67993676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e46d57a6cb6ed682b169e22974dba15872a96d4' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/personas/templates/personas_cambiar_foto.html',
      1 => 1597928602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9742915401d3_67993676 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
      <div class="col-md-4">
      <?php if ($_SESSION['u']['foto_perfil'] != 'NULL') {?>
        <img class="img-thumbnail rounded "
         src="../../imagenes/perfil/<?php echo $_SESSION['u']['foto_perfil'];?>
"
         alt="User profile picture">
      <?php }?>
      </div>
      <div class="col-md-8">
      <h2>Cambiar foto de perfil</h2>
        <form 
          action="personas_Cambiar_foto.php" 
          method="POST" 
          class="px-4 py-3" 
          id="cambiar_foto_perfil"
          name="cambiar_foto_perfil"
          enctype="multipart/form-data">
           <div class="alert alert-info" role="alert">
            Por favor seleccione una fotoagrafia acorde a un perfil universitario
          </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Buscar fotografia</label>
              <input type="file" class="form-control-file" name="imagen" required="">
            </div>

          <div class="form-group">
          <input 
            class="btn btn-primary boton" 
            type="submit" 
            name="enviar" 
            value="Actualizar">
          </div>

        </form>
      </div>


    
  </div>
</div>


<?php }
}

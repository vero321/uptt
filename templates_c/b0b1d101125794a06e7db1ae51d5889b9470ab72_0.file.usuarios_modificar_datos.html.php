<?php
/* Smarty version 3.1.30, created on 2020-03-18 10:11:02
  from "/home/veronica/public_html/uptt/templates/usuarios_modificar_datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e722bf6e0ae31_50213248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b1d101125794a06e7db1ae51d5889b9470ab72' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/usuarios_modificar_datos.html',
      1 => 1584540659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
  ),
),false)) {
function content_5e722bf6e0ae31_50213248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" style="margin-top: 90px;">
    <div class="row">
        <div class="col-sm-3"> 

            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="col-sm-8">

    
        <h2 class="subtitulo" align="center">Modificar Datos</h2>
        <form 
                      method="POST" 
                      class="px-4 py-3" 
                      id="modificar_datos"
                      name="modificar_datos" 
                      action="proc_modificar_datos.php">

                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input 
                            type="password" 
                            title="Escriba la Clave" 
                            required="required" 
                            class="form-control" 
                            id="nombre" 
                            name="nombre">
                        </div>

                        <div class="form-group">
                          <label for="apellido">Apellido</label>
                          <input 
                            type="password" 
                            title="Escriba la Clave" 
                            required="required" 
                            class="form-control" 
                            id="apellido" 
                            name="apellido">
                        </div>
                    
                      <div class="form-group">
                        <input 
                          class="link float-left btn btn-light" 
                          type="submit" 
                          name="enviar" 
                          value="Guardar">
                      </div>
                    </form>


      </div>
    </div>
</div>
<?php }
}

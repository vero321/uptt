<?php
/* Smarty version 3.1.30, created on 2020-07-11 22:14:23
  from "/home/veronica/public_html/uptt/modulos/personas/templates/usuarios_cambiar_clave.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0a71ff321ef3_56482095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a5d435c847eac0e837dd0b65203be040c860c5' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/personas/templates/usuarios_cambiar_clave.html',
      1 => 1594140955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera_interna.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f0a71ff321ef3_56482095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" >
    <div class="row" id="central_datos">
        
        <div class="col-sm-8"  >

    
        <h2 class="subtitulo" align="center">Cambiar Clave</h2>
        <form 
                      method="POST" 
                      class="px-4 py-3" 
                      id="cambiar_clave"
                      name="cambiar_clave" 
                      action="proc_cambiar_clave.php">

                        <div class="form-group">
                          <label for="clave0">Clave Actual</label>
                          <input 
                            type="password" 
                            title="Escriba la Clave" 
                            required="required" 
                            class="form-control" 
                            id="clave0" 
                            name="clave0">
                        </div>

                        <div class="form-group">
                          <label for="clave1">Nueva Clave</label>
                          <input 
                            type="password" 
                            title="Escriba la Clave" 
                            required="required" 
                            class="form-control" 
                            id="clave1" 
                            name="clave1">
                        </div>
                    
                        <div class="form-group">
                          <label for="clave2">Repita la Clave</label>
                          <input 
                            type="password" 
                            title="Repita la Clave" 
                            required="required" 
                            class="form-control" 
                            id="clave2" 
                            name="clave2">
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
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

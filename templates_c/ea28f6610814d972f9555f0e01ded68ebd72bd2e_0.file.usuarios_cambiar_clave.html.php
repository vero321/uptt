<?php
/* Smarty version 3.1.30, created on 2020-07-07 22:15:26
  from "/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/usuarios_cambiar_clave.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f052c3ee6a665_26980239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea28f6610814d972f9555f0e01ded68ebd72bd2e' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/usuarios_cambiar_clave.html',
      1 => 1594172266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera_interna.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f052c3ee6a665_26980239 (Smarty_Internal_Template $_smarty_tpl) {
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

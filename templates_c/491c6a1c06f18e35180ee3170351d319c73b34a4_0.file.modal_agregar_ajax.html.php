<?php
/* Smarty version 3.1.30, created on 2020-10-28 12:03:30
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/modal_agregar_ajax.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9996521ab1a4_73232708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491c6a1c06f18e35180ee3170351d319c73b34a4' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/modal_agregar_ajax.html',
      1 => 1597520584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9996521ab1a4_73232708 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="modal" id="modal_agregar_usuario">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Registrar Usuario</h4>
          <div class="btn-group">
            <button type="button" class="close btn btn-outline-danger" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
          </div>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        	<div class="container">
            <div class="row">
              <div class="col-12">   
                  <div class="container">
                    <div class="centro"> 
                        <form 
                        	class="px-4 py-3" 
                        	id="from_registrar_usuario">
                              
                         	<div class="form-group">
                            	<label for="id">Cedula</label>
                            	 <input 
                                type="text" 
                                title="Escriba la ci del Usuario" 
                                required="required" 
                                class="form-control" 
                                id="id" 
                                name="id" 
                                placeholder="12345678"
                                >
                          	</div>

                          <div class="form-group">
                              <label for="correo">Correo Electrónico</label>
                               <input 
                                type="email" 
                                title="Escriba su Correo Electrónico" 
                                required="required" 
                                class="form-control" 
                                id="correo" 
                                name="correo" 
                                placeholder="login@correo.com">
                            </div>
                                  
                        <div class="form-group">
            							<input 
            								class="btn-enviar btn btn-sm btn-primary" 
            								type="submit" 
            								name="enviar" 
            								value="Registrar"
                            id="btn-registrar-usuario">
                    	</div>
                    </form>
             			 </div>
                </div>  
              </div>
            </div>
       </div>
    </div>
  </div>
</div>
</div><?php }
}

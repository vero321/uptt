<?php
/* Smarty version 3.1.30, created on 2020-07-10 12:43:06
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f089a9a082328_46923926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08b7105cf127193afccd7690338929aeb298f74' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_modificar.html',
      1 => 1594172266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f089a9a082328_46923926 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Modificar Usuario</h2>
                    <form 
                      action="proc_usuarios_modificar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="registro_usuario"
                      name="registro_usuario">
                      <div class="form-group">
                          <label for="id">Cedula</label>
                           <input 
                            type="text" 
                            title="Escriba la ci del Usuario" 
                            required="required" 
                            class="form-control" 
                            disabled="disabled"
                            placeholder=""
                            value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">

                      <div class="form-group">
                          <label for="correo">Correo Electrónico</label>
                           <input 
                            type="email" 
                            title="Escriba su Correo Electrónico" 
                            required="required" 
                            class="form-control" 
                            id="correo" 
                            name="correo" 
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>
">
                        </div>
                    
                        <!--div class="form-group">
                          <label for="Tipo">Rol del usuario</label>
                          <select 
                            title="Seleccione el Tipo de Usuario que le Corresponda" 
                            required="required" 
                            id="rol" 
                            name="rol" 
                            class="form-control"><option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_rol'];?>
">Rol actual</option>
                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?><option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>
</option>
                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                          </select>
                        </div-->


                      <input type="hidden" name="rol_listar" value="<?php echo $_smarty_tpl->tpl_vars['rol_listar']->value;?>
">
                      <div class="form-group">
                        <input 
                          class="btn-enviar btn btn-sm btn-primary" 
                          type="submit" 
                          name="enviar" 
                          value="Modificar">
                      </div>
                    </form>
              </div> 
            </div>
        </section>
  </div>
  <div class="col-2"></div>

</div>  
</div>
<?php }
}
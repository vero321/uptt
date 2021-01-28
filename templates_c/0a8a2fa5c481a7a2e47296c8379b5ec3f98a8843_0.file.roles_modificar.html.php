<?php
/* Smarty version 3.1.30, created on 2021-01-27 20:50:28
  from "/home/veronica/public_html/uptt/modulos/rol/templates/roles_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60120a546ca858_01068088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a8a2fa5c481a7a2e47296c8379b5ec3f98a8843' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/rol/templates/roles_modificar.html',
      1 => 1603800948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60120a546ca858_01068088 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">

  <div class="col-12">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Modificar ROL</h2>
                    <form 
                      action="proc_roles_modificar.php" 
                      method="POST" 
                      class="p-3" 
                      id="modificar_rol"
                      name="modificar_rol">
                    
                      <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
">
                        </div>
                        <div class="form-group">
                          <label for="correo">Rol</label>
                           <input 
                            type="text" 
                            required="required" 
                            class="form-control" 
                            id="rol" 
                            name="rol" 
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['rol']->value['rol'];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['rol'];?>
">
                        </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Nive</label>
                     <select class="form-control" id="nivel" name="nivel">
                    <option class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['nivel'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nivel'];?>
</option>
                    <option class="form-control" value="1000" >1000</option>
                    <option class="form-control" value="900" >900</option>
                    <option class="form-control" value="800" >800</option>
                    <option class="form-control" value="700" >700</option>
                    <option class="form-control" value="600" >600</option>
                    <option class="form-control" value="500" >500</option>
                    <option class="form-control" value="400" >400</option>
                    <option class="form-control" value="300" >300</option>
                    <option class="form-control" value="200" >200</option>
                    <option class="form-control" value="100" >100</option>
                    <option class="form-control" value="0"   >0</option>

                    </select>
                  </div>
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

</div>  
</div>
<?php }
}

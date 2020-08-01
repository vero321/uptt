<?php
/* Smarty version 3.1.30, created on 2020-07-31 12:43:42
  from "/home/palencia/public_html/proyecto4/uptt/modulos/rol/templates/roles_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f244a3ebaafa4_97180150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37b746ce6f6d86ae44a15227d9742f715c9b84f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/rol/templates/roles_agregar.html',
      1 => 1595293062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f244a3ebaafa4_97180150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
      <section id="intro">
        <div class="container">
          <div class="centro"> 
            <h1 align="center">Agregar Rol</h1>
              <form 
              	action="proc_roles_agregar.php" 
              	method="POST" 
              	class="px-4 py-3" 
              	id="registro_usuario"
              	name="registro_usuario">
              
               	<div class="form-group">
                  	<label for="id">Nombre del rol</label>
                  	 <input 
                      type="text" 
                      title="Escriba la ci del Usuario" 
                      required="required" 
                      class="form-control" 
                      id="rol" 
                      name="rol" 
                      placeholder="profesor de proyecto">
                	</div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Nivel</label>
                     <select class="form-control" id="nivel" name="nivel">
                    <option class="form-control" value="-----" id="-----">----</option>
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

                    <h5>Privilegios del Rol</h5>
                  <div class="form-row">

                      <div class="form-group">
    

                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['privilegios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <a class="nav-link dropdown-toggle p-0" data-toggle="collapse" href='#<?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cod'];?>
'><?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</a><br>
                        <fieldset class="f_roles collapse" id="<?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cod'];?>
" >
                          <ul>   
                        <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                          <li><label class="form-check-label">
                            <input  type="checkbox"  class="form-check-input"  
                            name="privilegio[]" value="<?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]["p"][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]["p"][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['privilegio'];?>

                          </label></li>
                        <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>  
                          </ul>
                        </fieldset>


                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                      
                      
                      </div>
                  </div>


              	<div class="form-group">
                  <input type="reset" class="btn btn-outline-secondary btn-sm"></input>
    							<input 
    								class="btn-enviar btn btn-sm btn-primary" 
    								type="submit" 
    								name="enviar" 
    								value="Guardar Rol">
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

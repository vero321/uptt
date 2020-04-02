<?php
/* Smarty version 3.1.30, created on 2020-04-01 20:08:08
  from "/home/jose/public_html/proyecto4/uptt/templates/roles_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e852ce8e73405_51515863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '619a0f711d8989966b90c969d5fdeb64daea2322' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/roles_agregar.html',
      1 => 1585762524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e852ce8e73405_51515863 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <label for="exampleFormControlSelect1">Nive</label>
                     <select class="form-control" id="nivel" name="nivel">
                    <option class="form-control" value="-----" id="-----">----</option>
                    <option class="form-control" value="1000" >1000</option>
                    <option class="form-control" value="950" >950</option>
                    <option class="form-control" value="900" >900</option>
                    <option class="form-control" value="850" >850</option>
                    <option class="form-control" value="800" >800</option>
                    <option class="form-control" value="750" >750</option>
                    <option class="form-control" value="700" >700</option>
                    <option class="form-control" value="650" >650</option>
                    <option class="form-control" value="600" >600</option>
                    <option class="form-control" value="550" >550</option>
                    <option class="form-control" value="500" >500</option>
                    <option class="form-control" value="450" >450</option>
                    <option class="form-control" value="400" >400</option>
                    <option class="form-control" value="350" >350</option>
                    <option class="form-control" value="300" >300</option>
                    <option class="form-control" value="250" >250</option>
                    <option class="form-control" value="200" >200</option>
                    <option class="form-control" value="150" >150</option>
                    <option class="form-control" value="100" >100</option>
                    <option class="form-control" value="50"  >50</option>
                    <option class="form-control" value="0"   >0</option>

                    </select>
                  </div>

                  <div class="form-row">
                    <h5>Privilegios del Rol</h5>
                      <div class="ejem2">
                      <div class="form-group">

                      <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['privilegios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                      <div class="form-check form-check-inline ejem ">
                        <label class="form-check-label">
                          <input  type="checkbox"  class="form-check-input"  
                          name="privilegio[]" value="<?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                          <?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['privilegio'];?>

                        </label>
                     
                      </div>
                      <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                      </div>
                    </div>
                  </div>


              	<div class="form-group">
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

<?php
/* Smarty version 3.1.30, created on 2020-11-24 11:28:45
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd26ad85c2a1_33912458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2f9d7b54a0d764d737c5274cca0e105712d137' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_agregar.html',
      1 => 1606231694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5fbd26ad85c2a1_33912458 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h3 style="text-align: center;">Agregar Una Propuesta</h3>
                    <form 
                    	action="proc_propuesta_agregar.php" 
                    	method="POST" 
                    	class="px-4 py-3" 
                    	id="propuesta_agregar"
                    	name="propuesta_agregar">
                  
                      	<div class="form-group">
                          <label for="nombre_pnf">Nombre Del PNF</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo del PNF" 
                            required="required" 
                            class="form-control" 
                            id="nombre_largo" 
                            name="nombre_largo"
                            value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_largo'];?>
" disabled="">
                        </div>



                      <input type="hidden" name="equipo_id" value="<?php echo $_smarty_tpl->tpl_vars['equipo_id']->value;?>
">
                      
                      <div class="form-group"> 
                        PNF
                        <div class="form_datos"><?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_largo'];?>
</div>
                        <input 
                            type="hidden" 
                            id="pnf_id" 
                            name="pnf_id"
                            value="<?php echo $_smarty_tpl->tpl_vars['pnf']->value['id'];?>
">
                        </div>
 
                        <div class="form-group">
                          Docente Asesor Responsable
                          <div class="form_datos"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['docente']->value['nombre']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['docente']->value['apellido']);?>
</div>
                        <input 
                            type="hidden" 
                            name="docente" 
                            value="<?php echo $_smarty_tpl->tpl_vars['docente']->value['id'];?>
">
                        </div>

                        <div class="form-group">
                        <label for="autores">Autores</label>
                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['equipo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <input 
                            type="hidden" 
                            name="autores[]" 
                            value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <div class="form_datos"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido']);?>
</div>
                        
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                        </div>

                      <div class="form-group">
                        Trayecto
                        <div class="form_datos"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['trayecto']->value['trayecto']);?>
</div>
                        <input 
                            type="hidden" 
                            id="trayecto_id" 
                            name="trayecto_id"
                            value="<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
">
                      </div>
                      <div class="form-group">
                          <label for="fecha">Fecha</label>
                          <input 
                            width="20px" 
                            type="date" 
                            title="Coloque la Fecha Correspondiente" 
                            required="required" 
                            class="form-control" 
                            id="fecha" 
                            name="fecha"  
                            placeholder='<?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
'
                            value='<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
' 
                            name="fecha" 
                            value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" 

                            >
                        </div>

                    <div class="form-group">
                          <label for="comunidad">Organismo, Institución o Comunidad a quien va dirigido el Proyecto</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre de la Comunidad o Institución" 
                            required="required" 
                            class="form-control" 
                            id="comunidad" 
                            name="comunidad"
                            value="">
                    </div>

                    <div class="form-group">
                          <label for="direccion">Dirección</label>
                          <input 
                            type="text" 
                            title="Escriba la Dirección exacta" 
                            required="required" 
                            class="form-control direccion" 
                            id="direccion" 
                            name="direccion"
                            value="">
                          
                    </div>
                    <div class="form-row">
                      <div class="form-group col">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                          <option selected></option>
                          <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['estados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['estados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre'];?>
</option>
                          <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                        </select>
                      </div>
                      <div class="form-group col">
                        <label for="municipio">Municipio</label>
                        <select id="municipio" name="municipio" class="form-control">
                          <option selected></option>
                          <?php
$__section_k_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_k']) ? $_smarty_tpl->tpl_vars['__smarty_section_k'] : false;
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['municipios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total != 0) {
for ($__section_k_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_2_iteration <= $__section_k_2_total; $__section_k_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['municipios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['municipios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['nombre'];?>
</option>
                          <?php
}
}
if ($__section_k_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_k'] = $__section_k_2_saved;
}
?>
                          
                        </select>
                      </div>
                      <div class="form-group col">
                        <label for="parroquia">Parroquia</label>
                        <select id="parroquia" name="parroquia" class="form-control">
                          <option selected></option>
                          <?php
$__section_l_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_l']) ? $_smarty_tpl->tpl_vars['__smarty_section_l'] : false;
$__section_l_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['parroquias']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_l_3_total = $__section_l_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_l'] = new Smarty_Variable(array());
if ($__section_l_3_total != 0) {
for ($__section_l_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] = 0; $__section_l_3_iteration <= $__section_l_3_total; $__section_l_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']++){
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['parroquias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['parroquias']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['nombre'];?>
</option>
                          <?php
}
}
if ($__section_l_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_l'] = $__section_l_3_saved;
}
?>
                          
                        </select>
                      </div>

                    </div>

                    <div class="form-group">
                      <label for="linea_investigacion">Línea de Investigación</label>
                      <input 
                        type="text" 
                        title="Escriba la Línea de Investigación correspondiente" 
                    
                        class="form-control " 
                        id="linea_investigacion" 
                        name="linea_investigacion"
                        value="">
                          
                    </div>

                    <div class="card mb-4">
                      <div class="card-header">
                        <a class="link" data-toggle="collapse" href="#propuesta1" aria-expanded="false" aria-controls="propuesta1">
                        Propuesta 1</a>
                      </div>
                    <div class="collapse" id="propuesta1">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="propuesta1">Descripción de la Propuesta</label>
                          <input 
                            type="text" 
                            title="Descripción de la Propuesta" 
                            required="required" 
                            class="form-control " 
                            id="propuesta1" 
                            name="propuesta1"
                            value="">
                        </div>
                        <div class="form-group">
                          <label for="objetivo1">Objetivo</label>
                          <input 
                            type="text" 
                            title="Objetivo General" 
                            required="required" 
                            class="form-control " 
                            id="objetivo1" 
                            name="objetivo1"
                            value="">
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="card mb-4">
                      <div class="card-header">
                       <a class="link" data-toggle="collapse" href="#propuesta2" aria-expanded="false" aria-controls="propuesta2">
                        Propuesta 2</a>
                      </div>
                    <div class="collapse" id="propuesta2">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="propuesta2">Descripción de la Propuesta</label>
                          <input 
                            type="text" 
                            title="Descripción de la Propuesta" 
                            required="required" 
                            class="form-control " 
                            id="propuesta2" 
                            name="propuesta2"
                            value="">
                        </div>
                        <div class="form-group">
                          <label for="objetivo2">Objetivo</label>
                          <input 
                            type="text" 
                            title="Objetivo General" 
                            required="required" 
                            class="form-control " 
                            id="objetivo2" 
                            name="objetivo2"
                            value="">
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="card mb-4">
                      <div class="card-header">
                        <a class="link" data-toggle="collapse" href="#propuesta3" aria-expanded="false" aria-controls="propuesta3">
                        Propuesta 3</a>
                      </div>
                     <div class="collapse" id="propuesta3">  
                      <div class="card-body">
                        <div class="form-group">
                          <label for="propuesta3">Descripción de la Propuesta</label>
                          <input 
                            type="text" 
                            title="Descripción de la Propuesta" 
                            required="required" 
                            class="form-control " 
                            id="propuesta3" 
                            name="propuesta3"
                            value="">
                        </div>
                        <div class="form-group">
                          <label for="objetivo3">Objetivo</label>
                          <input 
                            type="text" 
                            title="Objetivo General" 
                            required="required" 
                            class="form-control " 
                            id="objetivo3" 
                            name="objetivo3"
                            value="">
                        </div>
                      </div>
                    </div>
                  </div>                
                    
                    	<div class="form-group">
          							<input 
          								class="btn-enviar boton" 
          								type="submit" 
          								name="enviar" 
          								value="Registrar">
                    	</div>
                    </form>
              </div> 
            </div>
        </section>
  </div>
  <div class="col-2"></div>

</div>  
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}

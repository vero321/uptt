<?php
/* Smarty version 3.1.30, created on 2021-01-20 01:10:26
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6007bb42e8dc24_89544290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2f9d7b54a0d764d737c5274cca0e105712d137' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_agregar.html',
      1 => 1611073924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../modal/modal_comunidad.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6007bb42e8dc24_89544290 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <style type="text/css">
  #propuesta_agregar fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
<div class="container">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">  
  <div class="card">
    <div class="card-body">
      <div class="container">
        <h2 class="p-3 font-weight-bold">Agregar propuesta</h2>
        <small>Los campos marcados con <i class="text-danger">*</i> son requeridos</small>
        <div class="progress m-3">
          <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <form 
            action="proc_propuesta_agregar.php" 
            method="POST" 
            class="px-4 py-3" 
            id="propuesta_agregar"
            name="propuesta_agregar">
          <fieldset class="">
            <h3 class="my-3 font-weight-bold"><span class="badge badge-primary rounded-circle">1</span> Confrmar autores</h3>
            <div class="form-group">
              <label for="autores">Autores</label>
              <div class="form_datos"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['lider']->value['nombre']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['lider']->value['apellido']);?>
</div>
              <input 
                  type="hidden" 
                  name="lider" 
                  value="<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
">
              
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
          
            <input type="button" name="data[password]" class="next btn btn-info" value="Confirmar">
          </fieldset>
          <fieldset class="">
            <h3 class="my-3 font-weight-bold"><span class="badge badge-primary rounded-circle">2</span> Datos generales</h3>
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
                <label for="fecha">Fecha de creación<i class="text-danger">*</i></label>
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
                  >
            </div>
            <div class="form-group">
                      
              <label for="linea_investigacion">Línea de Investigación <i class="text-danger">*</i></label>
              <select id="linea_investigacion" name="linea_investigacion" class="form-control" required="">
                  <option selected></option>
                  <?php
$__section_a_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_a']) ? $_smarty_tpl->tpl_vars['__smarty_section_a'] : false;
$__section_a_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lineas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_a_1_total = $__section_a_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_a'] = new Smarty_Variable(array());
if ($__section_a_1_total != 0) {
for ($__section_a_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] = 0; $__section_a_1_iteration <= $__section_a_1_total; $__section_a_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']++){
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['lineas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lineas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_a']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_a']->value['index'] : null)]['nombre'];?>
</option>
                  <?php
}
}
if ($__section_a_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_a'] = $__section_a_1_saved;
}
?>
                </select>
                  
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previo">
            <input type="button" name="next" class="next btn btn-info" value="Siguiente">
          </fieldset>
          <fieldset class="">
            <h3 class="my-3 font-weight-bold"><span class="badge badge-primary rounded-circle">3</span> Información de la comunidad</h3>
            <div class="form-group">
              <label>Buscar comunidad</label>
              <br>
              <small>Escriba el nombre o las siglas de la comunidad o institución</small>
              <input 
              type="text"
              id="buscar_comunidad"
              name="buscar_comunidad"
              class="form-control" 
              title="Escriba el nombre o las siglas de la comunidad o institución"
              placeholder="Escriba el nombre o las siglas de la comunidad o institución" 
               >
            </div>
           <div id="alerta-comunidad">
             
           </div>
            <button class="btn btn-primary " 
               title="Registrar comunidad"
               id="btn-comunidad" 
               disabled>
               <i class="fa fa-plus"></i>
             </button>
            <div class="form-group">
              
            </div>
            <div class="form-group" >
              <label>Selecione comunidad <i class="text-danger">*</i></label>
              <select id="comunidad" name="comunidad" class="form-control" required="">
                 
                  
                </select>
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previo">
            <input type="button" name="next" class="next btn btn-info" value="Siguiente">
          </fieldset>
            <fieldset class="">
            <h3 class="my-3"><span class="badge badge-primary rounded-circle">4</span> Propuestas</h3>
              <div class="card mb-4">
                <div class="card-header">
                  <a class="link" data-toggle="collapse" href="#proposicion1" aria-expanded="false" aria-controls="proposicion1">
                  Proposicion 1</a>
                </div>
              <div class="collapse show" id="proposicion1">
                <div class="card-body">
                  <div class="form-group">
                    <label for="proposicion1">Descripción de la Proposición <i class="text-danger">*</i></label>
                    <textarea
                      type="text" 
                      title="Descripción de la Proposicion" 
                      required="required" 
                      class="form-control " 
                      id="proposicion1" 
                      name="proposicion1"
                      ></textarea> 
                  </div>
                  <div class="form-group">
                    <label for="objetivo1">Objetivo <i class="text-danger">*</i></label>
                    <textarea 
                      type="text" 
                      title="Objetivo General" 
                      required="required" 
                      class="form-control " 
                      id="objetivo1" 
                      name="objetivo1"
                      ></textarea>
                  </div>
                </div>
              </div>
            </div>

              <div class="card mb-4">
                <div class="card-header">
                 <a class="link" data-toggle="collapse" href="#proposicion2" aria-expanded="false" aria-controls="proposicion2">
                  Proposicion 2</a>
                </div>
              <div class="collapse" id="proposicion2">
                <div class="card-body">
                  <div class="form-group">
                    <label for="propuesta2">Descripción de la Proposicion <i class="text-danger">*</i></label>
                    <textarea 
                      type="text" 
                      title="Descripción de la Proposicion" 
                      required="required" 
                      class="form-control " 
                      id="proposicion2" 
                      name="proposicion2"
                      ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="objetivo2">Objetivo <i class="text-danger">*</i></label>
                    <textarea 
                      type="text" 
                      title="Objetivo General" 
                      required="required" 
                      class="form-control " 
                      id="objetivo2" 
                      name="objetivo2"
                      ></textarea>
                  </div>
                </div>
              </div>
            </div>

              <div class="card mb-4">
                <div class="card-header">
                  <a class="link" data-toggle="collapse" href="#proposicion3" aria-expanded="false" aria-controls="proposicion3">
                  Proposicion 3</a>
                </div>
               <div class="collapse" id="proposicion3">  
                <div class="card-body">
                  <div class="form-group">
                    <label for="proposicion3">Descripción de la Proposicion <i class="text-danger">*</i></label>
                    <textarea 
                      type="text" 
                      title="Descripción de la Proposicion" 
                      required="required" 
                      class="form-control " 
                      id="proposicion3" 
                      name="proposicion3"
                      ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="objetivo3">Objetivo <i class="text-danger">*</i></label>
                    <textarea 
                      type="text" 
                      title="Objetivo General" 
                      required="required" 
                      class="form-control " 
                      id="objetivo3" 
                      name="objetivo3"
                      ></textarea>
                  </div>
                </div>
              </div>
            </div> 
            <input type="button" name="previous" class="previous btn btn-default" value="Previo">

            <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data">
          </fieldset>
          </form>
      </div>
    </div>
  </div>
    <div class="col-md-2"></div>

</div> 
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_comunidad.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}

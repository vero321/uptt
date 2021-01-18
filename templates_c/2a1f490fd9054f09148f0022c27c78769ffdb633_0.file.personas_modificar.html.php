<?php
/* Smarty version 3.1.30, created on 2021-01-17 17:21:09
  from "/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/personas_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6004aa456217e5_43027109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a1f490fd9054f09148f0022c27c78769ffdb633' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/personas_modificar.html',
      1 => 1610918453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004aa456217e5_43027109 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
<div class="container">
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <div class="container my-4">
        <h2 class="p-2">Modificar datos personales</h2>
        <div class="progress m-2">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <form id="regiration_form" novalidate action="proc_personas_modificar.php"  method="post">
        <fieldset>
          <h3><span class="badge badge-primary rounded-circle">1</span> Confirma tus datos</h3>
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['id'];?>
">
              <div class="form-group">
                  <label for="id0">Cedula</label>
                  <input 
                    type="text" 
                    required="required" 
                    class="form-control" 
                    id="id0" 
                    name="id0" 
                    placeholder="1234567"
                    value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['id'];?>
"
                    disabled="disable">
                </div>
                <div class="form-group">
                  <label for="id0">Correo</label>
                  <input 
                    type="text" 
                    required="required" 
                    class="form-control" 
                    id="id0" 
                    name="id0" 
                    placeholder="1234567"
                    value="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value['correo'];?>
"
                    disabled="disable">
                </div>

          <input type="button" name="data[password]" class="next btn btn-info rounded-pill" value="Siguiente" />
        </fieldset>
        <fieldset>
          <h3><span class="badge badge-primary rounded-circle">2</span> Agregar detalles personales</h3>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input 
                    type="text" 
                    title="Escriba el Nombre" 
                    required="required" 
                    class="form-control" 
                    id="nombre" 
                    name="nombre"
                    placeholder="Jhon Doe"
                    value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['nombre'];?>
">
                </div> 

                <div class="form-group">
                  <label for="apellido">Apellido</label>
                  <input 
                    type="text" 
                    title="Escriba el apellido" 
                    required="required" 
                    class="form-control" 
                    id="apellido" 
                    name="apellido"
                    placeholder="Jhon Doe"
                    value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['apellido'];?>
">
                </div> 
          <input type="button" name="previous" class="previous btn btn-default rounded-pill" value="Previo" />
          <input type="button" name="next" class="next btn btn-info rounded-pill" value="Siguiente" />
        </fieldset>
        <fieldset>
          <h3><span class="badge badge-primary rounded-circle">3</span> Información de contacto</h3>
          <small>Esta información es usada para complementar tu targeta de perfil, esta misma puede ser vista por los usuarios de Repo </small>
          <div class="form-group">
          <label for="mob">Numero Celular</label>
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Numero Celular" value="<?php echo $_smarty_tpl->tpl_vars['personas']->value['telefono'];?>
">
        </div>
        <div class="form-group">
          <label >Estado</label>
          <textarea  class="form-control" name="texto" placeholder="Puedes completar este campo con información personal para complementar tu perfil"><?php echo $_smarty_tpl->tpl_vars['personas']->value['texto'];?>
</textarea>
        </div>
          <input type="button" name="previous" class="previous btn btn-default rounded-pill" value="Previo" />
          <input type="submit" name="submit" class="submit btn btn-success rounded-pill" value="Enviar" id="submit_data" />
        </fieldset>
      </form>


    </div>
    
  </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
<?php echo '</script'; ?>
><?php }
}

<?php
/* Smarty version 3.1.30, created on 2021-01-16 16:29:56
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_cambio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60034cc4c7b2a8_03133132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7778e5a2cd971ac5c200f0a1ac8f969d5be6c02' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_cambio.html',
      1 => 1610828952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60034cc4c7b2a8_03133132 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <style type="text/css">
  #evaluacion fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
<div class="container">
	<div class="row">
    	<div class="col-md-1">
    	</div>
    <div class="col-md-10">
      	<div class="container my-4">
        	<h2 class="p-2">Modificar datos personales</h2>
        	<div class="progress m-2">
          		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        	</div>

        	<form id="evaluacion" method="POST" action="proc_cambio.php">
        		
		        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        		<fieldset>
		         	<h3>Proposicion <span class="badge badge-primary rounded-circle">1</span> </h3>
		          	<div class="card m-3">
						<div class="card-body">
							<h6 class="font-weight-bold">Descripción:</h6>
			     			<p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[0]['descripcion'];?>
</p>
			    			<h6 class="font-weight-bold">Objetvo:</h6>
			     			<p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[0]['objetivo'];?>
</p>
		              		<input type="hidden" name="id_1" value="<?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[0]['id'];?>
">
                      <input type="hidden" id="id_1" value="<?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[0]['id'];?>
">
							<div class="form-group">
								<label for=Status>Status</label>
								<select class="form-control" id="status_1" name="status_1" required="">
									<option>- - - - -</option>
									<option>APROBADA</option>
									<option>RECHAZADA</option>
									<option>DECLINADA</option>
								</select>
							</div>
							<div class="form-group">
								<label for="id0">Sub status</label>
								<select class="form-control" id="sub_status_1" name="sub_status_1" required="">
									
								</select>
                <div class="form-group" id="trayecto_1">
                  <div id="carga">
                    
                  </div>
                 

                 </select>
              </div>
							</div>
						</div>
					</div>
		          <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
        		</fieldset>

				<fieldset>
					<h3>Proposicion <span class="badge badge-primary rounded-circle">2</span></h3>
					<div class="card m-3">
						<div class="card-body">
							<h6 class="font-weight-bold">Descripción:</h6>
							<p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[1]['descripcion'];?>
</p>
							<h6 class="font-weight-bold">Objetvo:</h6>
							<p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[1]['objetivo'];?>
</p>
							<input type="hidden" name="id_2" value="<?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[1]['id'];?>
">
							<div class="form-group">
								<label for="id0">Status</label>
								<select class="form-control" id="status_2" name="status_2" required="">
									
								</select>
							</div>
							<div class="form-group">
								<label for="id0">Sub status</label>
								<select class="form-control" id="sub_status_2" name="sub_status_2" required="">
									
								</select>
							</div>
              <div class="form-group" id="trayecto_2">
                
              </div>
						</div>
					</div>
					<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
					<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
				</fieldset>
				<fieldset>
					<h3>Proposicion <span class="badge badge-primary rounded-circle">3</span></h3>
					<div class="card m-3">
						<div class="card-body">
							<h6 class="font-weight-bold">Descripción:</h6>
							<p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[2]['descripcion'];?>
</p>
							<h6 class="font-weight-bold">Objetvo:</h6>
							<p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[2]['objetivo'];?>
</p>
							<input type="hidden" name="id_3" value="<?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[2]['id'];?>
">
							<div class="form-group">
								<label for="id0">Status</label>
								<select class="form-control" id="status_3" name="status_3" required="">
									
								</select>
							</div>
							<div class="form-group">
								<label for="id0">Sub status</label>
								<select class="form-control" id="sub_status_3" name="sub_status_3" required="">
									
								</select>
                <div class="form-group" id="trayecto_3">
                
              </div>
							</div>
						</div>
					</div>
					<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
					<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
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
 
let sub_status_aprovada ='<option value="NULL">selecione</option><option value="APROBADA">APROBADA</option><option value="CORRECCIONES">CORRECCIONES</option>';

let sub_status_rechazada = '<option value="NULL"></option><option value="NIVEL">NIVEL</option>';

let sub_status_declinada = '<option value="NULL"></option>';

let estados0 = '<option value="NULL">selecione</option><option value="RECHAZADA">RECHAZADA</option><option value="DECLINADA">DECLINADA</option>';

let estados1 = '<option value="NULL">selecione</option><option value="APROBADA">APROBADA</option><option value="RECHAZADA">RECHAZADA</option><option value="DECLINADA">DECLINADA</option>';


// Hacemos la lógica que cuando nuestro SELECT cambia de valor haga algo
  $('#status_1').change(function(){
    // Guardamos el select status 1
    let status_1 = $(this).val();
    let sub_status_1 = $('#sub_status_1');

    if (status_1 === 'APROBADA') {
 
    	sub_status_1.find('option').remove();
      sub_status_1.append(sub_status_aprovada);
    	sub_status_1.prop('disabled', false);
        $('#status_2').find('option').remove();
        $('#status_2').append(estados0);
        $('#status_3').find('option').remove();
        $('#status_3').append(estados0);
    }else if(status_1 === 'RECHAZADA' ){
    	sub_status_1.find('option').remove();
    	sub_status_1.append(sub_status_rechazada);
    	sub_status_1.prop('disabled', false);
    	$('#status_2').find('option').remove();
        $('#status_2').append(estados1);
        $('#status_3').find('option').remove();
        $('#status_3').append(estados1);
    }else if(status_1 === 'DECLINADA'){
    	sub_status_1.find('option').remove();
        sub_status_1.append(sub_status_declinada);
    	$('#status_2').find('option').remove();
        $('#status_2').append(estados1);
        $('#status_3').find('option').remove();
        $('#status_3').append(estados1);
    }

    });

   $('#status_2').change(function(){
   // Guardamos el select status 1
    let status_2 = $(this).val();
    let sub_status_2 = $('#sub_status_2');

    if (status_2 === 'APROBADA') {
    	
    	sub_status_2.find('option').remove();
        sub_status_2.append(sub_status_aprovada);
    	sub_status_2.prop('disabled', false);
        $('#status_3').find('option').remove();
        $('#status_3').append(estados0);
    }else if(status_2 === 'RECHAZADA' ){
    	sub_status_2.find('option').remove();
    	sub_status_2.append(sub_status_rechazada);
    	sub_status_2.prop('disabled', false);
    	var status_1 = $('#status_1').val();
    	if (status_1 === 'APROBADA') {
	        $('#status_3').find('option').remove();
	        $('#status_3').append(estados0);
    	}else{
         	$('#status_3').find('option').remove();
        	$('#status_3').append(estados1);
    	}
    }else if(status_2 === 'DECLINADA'){
    	sub_status_2.find('option').remove();
    	sub_status_2.append(sub_status_declinada);
        var status_1 = $('#status_1').val();
    	if (status_1 === 'APROBADA') {
	        $('#status_3').find('option').remove();
	        $('#status_3').append(estados0);
    	}else{
         	$('#status_3').find('option').remove();
        	$('#status_3').append(estados1);
    	}
    }

    });

     $('#status_3').change(function(){
   // Guardamos el select status 1
    let status_3 = $(this).val();
    let sub_status_3 = $('#sub_status_3');

    if (status_3 === 'APROBADA') {
    	
    	sub_status_3.find('option').remove();
        sub_status_3.append(sub_status_aprovada);
    	sub_status_3.prop('disabled', false);
    }else if(status_3 === 'RECHAZADA' ){
    	sub_status_3.find('option').remove();
    	sub_status_3.append(sub_status_rechazada);
    	sub_status_3.prop('disabled', false);
    	var status_1 = $('#status_1').val();
    	
    }else if(status_3 === 'DECLINADA'){
    	sub_status_3.find('option').remove();
    	sub_status_3.append(sub_status_declinada);
      
    }

    })

  $('#sub_status_1').change(function(){
    let sub_status_1 = $(this).val();
    let trayecto = $('#trayecto_1');

    if (sub_status_1 == 'NIVEL') {
    
      $.ajax({
          url: "../trayectos_pnf/trayectos_pnf_ajax.php",
          type: "POST",
          datatype:"json",
          data:{},    
          beforeSend: function(){
            //imagen de carga
              $('#carga').html('<div id="carga" class="d-flex justify-content-center m-5 p-5"><div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div></div');
            }, 
          success: function(data) {
            $('#carga').remove();
            trayectos = JSON.parse(data);
            var titulo = '<h5 class="my-3">Selecione el nivel adecuado esta propuesta</h5>';
            h = '<select id="trayecto_adecuado_1" name="trayecto_adecuado_1" class="form-control " required=""> ';
           trayecto.append(titulo,h);
           h2=$('#trayecto_adecuado_1');
           h2.find('option').remove();
            $(trayectos).each(function(i, v){ // indice, valor
              h2.append('<option value="' + trayectos[i].id_trayecto + '">' + trayectos[i].trayecto + '</option>');
            })
            //$('#trayecto_adecuado_1').toggleClass('d-block');
           
          }
        })
    }else{
      trayecto.empty();
    }
     $('#status_1').change(function(){
      trayecto.empty();
    });
  });
  
  $('#sub_status_2').change(function(){
    let sub_status_2 = $(this).val();
    let trayecto = $('#trayecto_2');

    if (sub_status_2 == 'NIVEL') {
    
      $.ajax({
          url: "../trayectos_pnf/trayectos_pnf_ajax.php",
          type: "POST",
          datatype:"json",
          data:{},    
          beforeSend: function(){
            //imagen de carga
              $('#carga').html('<div id="carga" class="d-flex justify-content-center m-5 p-5"><div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div></div');
            }, 
          success: function(data) {
            $('#carga').remove();
            trayectos = JSON.parse(data);
            var titulo = '<h5 class="my-3">Selecione el nivel adecuado esta propuesta</h5>';
            h = '<select id="trayecto_adecuado_2" name="trayecto_adecuado_2" class="form-control "  required=""> ';
           trayecto.append(titulo,h);
           h2=$('#trayecto_adecuado_2');
           h2.find('option').remove();
            $(trayectos).each(function(i, v){ // indice, valor
              h2.append('<option value="' + trayectos[i].id_trayecto + '">' + trayectos[i].trayecto + '</option>');
            })
            //$('#trayecto_adecuado_1').toggleClass('d-block');
           
          }
        })
    }else{
      trayecto.empty();
    }
     $('#status_1').change(function(){
      trayecto.empty();
    });
  });   

$('#sub_status_3').change(function(){
    let sub_status_3 = $(this).val();
    let trayecto = $('#trayecto_3');

    if (sub_status_3 == 'NIVEL') {
    
      $.ajax({
          url: "../trayectos_pnf/trayectos_pnf_ajax.php",
          type: "POST",
          datatype:"json",
          data:{},    
          beforeSend: function(){
            //imagen de carga
              $('#carga').html('<div id="carga" class="d-flex justify-content-center m-5 p-5"><div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div></div');
            }, 
          success: function(data) {
            $('#carga').remove();
            trayectos = JSON.parse(data);
            var titulo = '<h5 class="my-3">Selecione el nivel adecuado esta propuesta</h5>';
            h = '<select id="trayecto_adecuado_3" name="trayecto_adecuado_3" class="form-control " required=""> ';
           trayecto.append(titulo,h);
           h2=$('#trayecto_adecuado_3');
           h2.find('option').remove();
            $(trayectos).each(function(i, v){ // indice, valor
              h2.append('<option value="' + trayectos[i].id_trayecto + '">' + trayectos[i].trayecto + '</option>');
            })
            //$('#trayecto_adecuado_1').toggleClass('d-block');
           
          }
        })
    }else{
      trayecto.empty();
    }
     $('#status_1').change(function(){
      trayecto.empty();
    });
  });
});
<?php echo '</script'; ?>
>
<?php }
}

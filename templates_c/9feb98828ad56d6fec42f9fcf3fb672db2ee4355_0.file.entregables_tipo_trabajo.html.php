<?php
/* Smarty version 3.1.30, created on 2021-01-26 10:18:34
  from "/home/veronica/public_html/uptt/modulos/entregables/templates/entregables_tipo_trabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601024ba559438_38462991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9feb98828ad56d6fec42f9fcf3fb672db2ee4355' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/entregables/templates/entregables_tipo_trabajo.html',
      1 => 1611255560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601024ba559438_38462991 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="container my-3">
				<h4 class="font-weight-bold text-gray-900">Solicitar entregable</h4>
				<form id="tipo_documento" method="POST" action="proc_entregables_tipo_trabajo.php">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
						<label for=tipo>Tipo documento</label>
						<select class="form-control" id="tipo" name="tipo" required="">
							<option ></option>
						<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tipos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>	
							<option value="<?php echo $_smarty_tpl->tpl_vars['tipos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['tipos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</option>
						<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>	

						</select>
					</div>
					<div id="carga">
				
					</div>
					<div class="container my-3">
						<h5 id="titulo" class="font-weight-bold text-gray-900 mys-3"></h5>
						<ul class="list-group" id="estructura">

						</ul>

					</div>

				<div class="form-group" id="enviar">

				</div>

				</form>
			</div>
			

		</div>
	<div class="col-md-2"></div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$('#tipo').change(function(){
    let tipo_d = $(this).val();
	let estuctura = $('#estructura');
	$.ajax({
	  url: "../TIPOS_DE_DOCUMENTOS/tipo_ajax.php",
	  type: "POST",
	  datatype:"json",
	  data:{tipo_d : tipo_d},    
	  beforeSend: function(){
	    //imagen de carga
	      $('#carga').html('<div id="carga" class="d-flex justify-content-center m-5 p-5"><div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div></div>');
	    }, 
	  success: function(data) {
	    $('#carga').remove();
	    if (data != 0){
	        $('#titulo').text('Estructura');
	        estructura = JSON.parse(data);
	        estuctura.empty();
	        $(estructura).each(function(i, v){ // indice, valor
	         estuctura.append('<li class="list-group-item">' + v.nombre + '</li>');
	        })
	        $('#enviar').append('<input class="btn-enviar btn btn-sm btn-primary rounded-pill" type="submit" name="enviar" value="Registrar">');
	    }else{
	    	estuctura.empty();
	        $('#enviar').empty()
	        $('#titulo').text('Este tipo de documento aun no posee ninguna estructura');

	    }
	  }
	});

 });

<?php echo '</script'; ?>
>
<?php }
}

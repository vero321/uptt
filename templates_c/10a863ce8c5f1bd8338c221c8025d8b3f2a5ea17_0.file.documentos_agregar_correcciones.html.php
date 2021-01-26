<?php
/* Smarty version 3.1.30, created on 2021-01-26 12:19:47
  from "/home/veronica/public_html/uptt/modulos/documentos/templates/documentos_agregar_correcciones.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601041231c4636_17633233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10a863ce8c5f1bd8338c221c8025d8b3f2a5ea17' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/documentos/templates/documentos_agregar_correcciones.html',
      1 => 1611677973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601041231c4636_17633233 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">

  <div class="p-3 m-2"> 
  <form 
    enctype="multipart/form-data"
    method="POST"
    name="f_agregar_pdf"
    action="../documentos/proc_documentos_agregar_correcciones.php">
   <div class="form-group">
      <h3 class="font-weight-bold text-gray-900">Subir documento</h3>
      <label for="text">Seleccione el archivo que desea subir para entregar. Recuerda que este archio o archivos deben cumplir con los requisitos del entregable</label>
    <input type="hidden" name="id_trabajo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['t'];?>
">
    <input 
      type="hidden" 
      name="MAX_FILE_SIZE" 
      value="1000000000" />
      <input 
        type="file" 
        class="form-control my-2" 
        name="pdf[]"
        required="required"
        id="pdf0"
        accept="application/pdf"
        multiple="multiple" 
        >
        <input type="hidden"
        value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id_documento'];?>
"
        name="id">
    
        <div class="form-group">
          <input 
            class="btn btn-primary rounded-pill my-2" 
            type="submit" 
            name="enviar" 
            value="Continuar">
        </div>
    </div> 
  </form>  
</div>  
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    function validarpdf(campo){
        if($(campo)[0].files[0].type != 'application/pdf'){
            return false;
        }else{
            return true;
        }
    }
$(function() {
    $("#pdf0").change(function() {
        var pdf0 = $("#pdf0").val();
            if (!validarpdf($(this))) {
                $(this).val('');
                $("#pdf1").hide();
            }
        if (pdf0!='') {
            $("#pdf1").show();
        }
    });

    $(".pdf1").change(function() {
        var pdf0 = $(this).val();
        if (pdf0!='') {
            $(this).next().show();
        } 
    });


});
<?php echo '</script'; ?>
>
<?php }
}

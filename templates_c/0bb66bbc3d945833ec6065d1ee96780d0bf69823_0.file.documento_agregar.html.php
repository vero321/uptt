<?php
/* Smarty version 3.1.30, created on 2021-01-26 11:06:59
  from "/home/veronica/public_html/uptt/modulos/documentos/templates/documento_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601030136326e0_81708201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb66bbc3d945833ec6065d1ee96780d0bf69823' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/documentos/templates/documento_agregar.html',
      1 => 1611664959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601030136326e0_81708201 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">

  <div class="p-3 m-2"> 
  <form 
    enctype="multipart/form-data"
    method="POST"
    name="f_agregar_pdf"
    action="../documentos/proc_documento_agregar.php">
   <div class="form-group">
      <h3 class="font-weight-bold text-gray-900">Subir documento</h3>
      <label for="text">Seleccione el archivo que desea subir para entregar. Recuerda que este archio o archivos deben cumplir con los requisitos del entregable</label>
    <input type="hidden" name="id_trabajo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['t'];?>
">
    <input type="hidden" name="id_entregable" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['e'];?>
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

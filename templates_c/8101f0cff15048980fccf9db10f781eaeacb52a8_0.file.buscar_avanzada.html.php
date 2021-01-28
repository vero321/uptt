<?php
/* Smarty version 3.1.30, created on 2021-01-28 12:05:55
  from "/home/palencia/public_html/proyecto4/uptt/modulos/buscar/templates/buscar_avanzada.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6012e0e3241c81_82058844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8101f0cff15048980fccf9db10f781eaeacb52a8' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/buscar/templates/buscar_avanzada.html',
      1 => 1611849950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera.html' => 1,
    'file:../../pie/pie_externo.html' => 1,
  ),
),false)) {
function content_6012e0e3241c81_82058844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container col-md-8 col-md-offset-2">
  <div class="row">
      <div class="col">
        <form class="form"
              action="buscar.php"
              method="get"
              id="frm_avanzada"
              style="margin-top: 1em!important;"
              >           
              <div id="field_wrapper">
              <div class="input-group form-row" style="margin-bottom: 1em!important;">
                <div class="col-3">
                    <select id="campo1" name="campo[]" class="form-control">
                    </select>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control"
                    id="texto1"  data-sel='1' name="texto[]" placeholder="Buscar">
                </div>
                <div class="col-1">
                    <button href="##" class="btn btn-sm btn-outline-primary" type="button"
                    id="btn-agregar-fila"><span class="fa fa-plus"></span></button>
                </div>
              </div>
            </div>
            <input type="hidden" name="avanzada" value="SI">
            <input 
        class="btn btn-primary btn-sm" 
        type="submit" 
        name="enviar" 
        value="Buscar">
        <a
        class="link float-right" 
        href="buscar.php"
        value="Avanzada"
        > Búsqueda Sencilla</a>
        </form>
    </div>
  </div>
</div>



    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_externo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript">
/*
*/

var nf = 2;
var max_campos = 8;
var filas = new Array();

var campos = new Array();
campos[0] = ['titulo','Título'];
campos[1] = ['resumen','Resumen'];
campos[2] = ['p_clave','Palabra Clave'];
campos[3] = ['mes','Mes'];
campos[4] = ['anyo','Año'];
//campos[2] = ['autor','Autor'];
//campos[3] = ['tutor','Tutor'];
//campos[7] = ['carrera','Carrera'];


for (var i = 0; i < campos.length; i++) {
    $("#campo1").append(`<option value="${campos[i][0]}" >${campos[i][1]}</option>`);
}


function agregar_campos(){
    if (nf<=max_campos) {    
        var campo = `
            <div class="input-group form-row" style="margin-bottom: 1em!important;">
                <div class="col-3">
                    <select id="campo${nf}" name="campo[]" class="form-control">
                    </select>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control mitexto" 
                        id="texto${nf}"  data-sel='${nf}' name="texto[]" placeholder="Buscar">
                </div>
                <div class="col-1">
                </div>
            </div>
        `;
    } else {
        var campo = '';
    }
    return campo;

}

 $("#btn-agregar-fila").click(function(){
    $("#field_wrapper").append(agregar_campos());

    for (var i = 0; i < campos.length; i++) {
        $("#campo" + nf).append(`<option value="${campos[i][0]}" >${campos[i][1]}</option>`);
    }
    nf++;
 });

/*
$(".mitexto").keyup(function(event) {
    var filaa = Number($(this).attr('data-sel'));
    var filab = filaa + 1;



    if ( $("#fila"+ filab).attr('data-sel') != filab ) {
        $("#fila" + filaa).after(campo);
    }
});
*/


    /*





    $('.mimodal').click(function(){
        var dataURL = $(this).attr('data-href');

        $('.modal-body').load(dataURL,function(){
            var etiqueta = dataURL.split('.php')[0];
            $('#myModal').modal({show:true});

            switch (etiqueta) {
                case "usuarios_cambiar_clave":
                    $("#clave0").focus();
                    break;
                default:
                    // statements_def
                    break;
            }
        });
    });
*/

<?php echo '</script'; ?>
>


<?php }
}

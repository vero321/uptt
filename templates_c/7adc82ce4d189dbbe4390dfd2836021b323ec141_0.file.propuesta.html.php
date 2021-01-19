<?php
/* Smarty version 3.1.30, created on 2021-01-19 10:05:27
  from "/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6006e7272d8342_82388978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7adc82ce4d189dbbe4390dfd2836021b323ec141' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta.html',
      1 => 1611026437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../navegacion/barra_nucleo_pnf.html' => 1,
    'file:../../modal/modal_galeria.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6006e7272d8342_82388978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
<div class="container-fluid">
<!--container titulo -->
  <div class="container m-2 my-3">
    <h2 class="text-primary">Propuestas</h2>
  </div>
<!--/container titulo -->

<!--card principal -->
  <div class="card mb-5 shadow">
  <!--header card principal -->
    <div class="card-header py-0">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="mi_propuesta-tab" data-toggle="tab" href="#mi_propuesta" role="tab" aria-controls="mi_propuesta" aria-selected="true">Mi propuesta</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " id="propuestas_disponibles-tab" data-toggle="tab" href="#propuestas_disponibles" role="tab" aria-controls="propuestas_disponibles" aria-selected="false" data-equipo="<?php echo $_smarty_tpl->tpl_vars['equipo_id']->value;?>
" >Propuestas disponibles</a>
        </li>
      </ul>
    </div>
  <!--/header card principal -->
  <!--body card principal -->
    <div class="card-body p-0">
    <!--Tab -->        
      <div class="tab-content" id="myTabContent">
      <!--Tab propuesta -->        
        <div class="tab-pane fade show active" id="mi_propuesta" role="tabpanel" aria-labelledby="mi_propuesta-tab">
   
          <div class="mx-auto p-5">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              <h4 class="alert-heading">Atencion importante!</h4>
              <p>
                Aun no has registrado niguna propuesta. 
              </p>
              <hr>
              <p> Para reagistrar una propuesta preciona el Boton [+] y rellena el firmolario.</p>
              <?php if (in_array("PROP_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
              <a class="btn btn-md btn-primary align-middle" 
                type="button" 
                href="propuesta_agregar.php?equipo_id=<?php echo $_smarty_tpl->tpl_vars['equipo_id']->value;?>
" title="Agregar una Propuesta"><span class="fa fa-plus"></span>
               </a>
              <?php }?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>

      </div>
    <!--/Tab propuesta -->        

        <div class="tab-pane fade" id="propuestas_disponibles" role="tabpanel" aria-labelledby="propuestas_disponibles-tab">

          <div class="table-responsive p-5">
            <table id="tabla_disponibles" class="table" style="width:100%">
              <thead>
                <tr>
                  <td>Codigo</td>
                  <td>Codigo propuesta</td>
                  <td>Descripción</td>
                  <td>Objetivo</td>
                  <td>Funciones</td>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            
            </table>
            
          </div>
                    
        </div>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Propuesta"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

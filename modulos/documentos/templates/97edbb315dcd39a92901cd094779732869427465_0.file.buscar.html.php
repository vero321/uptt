<?php
/* Smarty version 3.1.30, created on 2021-01-28 11:05:00
  from "/home/palencia/public_html/proyecto4/uptt/modulos/buscar/templates/buscar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6012d29c420245_28568140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97edbb315dcd39a92901cd094779732869427465' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/buscar/templates/buscar.html',
      1 => 1611846299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_externo.html' => 1,
  ),
),false)) {
function content_6012d29c420245_28568140 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="row">

    <div class="col-8 my-2 mx-4 p-2">
      <form class="form-group form-portada" action="buscar.php" method="get">
                              
      <div class="form-group" padding="2" >
        <label class="sr-only" for="texto">Buscar</label>
          <div class="input-group">
              <input type="text" class="form-control plaintext" name="texto" id="texto" placeholder="Texto a buscar" required="required" >
      <input 
        class="btn btn-light btn-sm" 
        type="submit" 
        name="enviar" 
        value="Buscar">
              <div class="input-group-addon">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </div>
          </div>
      </div>
      <small class="form-text text-muted text-muted-label">
              Para buscar por título, resumen o palabras clave, escribe aquí y 
              haz click en [Buscar]. Si desea una búsqueda más específica, haz
              click en [Avanzada].
              </small>
      <input type="hidden" name="avanzada" value="NO">

      <a
        class="btn btn-link float-left " 
        href="buscar_avanzada.php"
        value="Avanzada"
        >Búsqueda Avanzada</a>
  </form>  
    </div>
    <div class="col-10 my-2 mx-4 p-2">
 
      <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['d']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?> 
      <div class="buscar-item">  
        <div class="buscar-titulo">  
            <a 
              data-href="modal_busqueda.php?id=<?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"  
              class="mimodal"
              title="Detalles"
              ><?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['titulo'];?>
&nbsp;<i class="fa fa-share-square-o"></i></a>
        </div> 

          <span class="mb-1 text-muted"><strong><?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['equipo']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
            <?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['equipo'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['equipo'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['apellido'];?>
.
          <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
          <?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['apellido'];?>
.
        </strong> </span>
          <span class="mb-1 text-muted"><?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_mes'];?>
, <?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_anyo'];?>
</span>

          <p class="text-justify mb-auto"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['resumen'],300,"...");?>
.</p>

          <div >
            <strong> Palabras Clave:</strong> <span class="buscar-pclave"><?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['palabras_clave'];?>
</span>

           
          </div>
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









    </div>
  </div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_externo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

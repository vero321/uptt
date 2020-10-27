<?php
/* Smarty version 3.1.30, created on 2020-10-20 11:37:31
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f8f043bc62188_04891094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2f9d7b54a0d764d737c5274cca0e105712d137' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_agregar.html',
      1 => 1603208248,
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
function content_5f8f043bc62188_04891094 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <h2>Agregar Una Propuesta</h2>
                    <form 
                    	action="proc_pnf_agregar.php" 
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



                        <div class="form-group">
                          <label for="trayecto">Trayecto</label>
                          <select 
                            title="Seleccione el Trayecto Correspondiente" 
                            required="required" 
                            id="trayecto" 
                            name="trayecto" 
                            class="form-control">
                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?><option value="<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['trayecto'];?>
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
                            value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" 
                            >
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

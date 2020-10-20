<?php
/* Smarty version 3.1.30, created on 2020-10-13 13:29:02
  from "/home/veronica/public_html/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_responsable.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f85e3de8a9941_52366663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef54b82156b8812f1026c9f49f6bff45f0d0dee' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/pnf_nucleo/templates/pnf_nucleo_responsable.html',
      1 => 1597928602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../usuario/templates/modal_agregar_ajax.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f85e3de8a9941_52366663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--finaliza-->
  <div class="container-fluid">
      <div class="card shadow">
        <div class="card-header">
			   <h2 class="text-center">Asinar responsable de <?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
</h2>
          <?php if (isset($_smarty_tpl->tpl_vars['respuesta']->value)) {?>
            <div class="alert alert-danger" role="alert">
              No se encuentra un rol con los permisos para ser Responsable de un PNF comuniquese con el <b>administrador</b> para que <b>Agregue un rol con los privilegios necesarios</b>
            </div>
          <?php } else { ?>
        </div>
			       <div class="m-3 p-4">
                <div class="container">  
                  <form action="pnf_nucleo_responsable.php?id_pnf=<?php echo $_smarty_tpl->tpl_vars['pnf']->value['id'];?>
&id_relacion=<?php echo $_smarty_tpl->tpl_vars['id_relacion']->value;?>
&id_nucleo=<?php echo $_smarty_tpl->tpl_vars['id_nucleo']->value;?>
" method="POST">
                      <div class="input-group">
                        <input id="p" name="buscar" type="text" class="form-control" placeholder="12345678 o coreo@correo.com" aria-describedby="basic-addon1" required >
                        <span class="input-group-addon bg-primary" id="basic-addon1" style="padding:0 12px;"><i class="fa fa-search  pt-2"></i></span>
                      </div>
                  </form>
                </div>
              </div>
          <?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value) && count($_smarty_tpl->tpl_vars['usuarios']->value) < 1) {?>
            <div class="card-body">
                <div class="container">
                  <div class="alert alert-info" role="alert">
                  No se encontro ningun usuario
                  que coincida con la busqueda.<br/> Para continuar registre el usuario [+]
                </div>
                 <a class="btn btn-sm btn-outline-primary" type="button"
                    href="#" title="Agregar Usuario"
                    id="btn-agregar-usuario">
                    <span class="fa fa-plus"></span>
                  </a>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:../../usuario/templates/modal_agregar_ajax.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif (isset($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
          <section id="home" class="text-center"></section>
              <section id="intro">
                  <div class="container">
                    <div class="centro"> 
                      <h3>Selecione un Usuario</h3>
              <form 
                            action="pnf_nucleo_responsable.php?id_pnf=<?php echo $_smarty_tpl->tpl_vars['pnf']->value['id'];?>
&id_relacion=<?php echo $_smarty_tpl->tpl_vars['id_relacion']->value;?>
&id_nucleo=<?php echo $_smarty_tpl->tpl_vars['id_nucleo']->value;?>
"
                            method="POST" 
                            class="px-4 py-3" 
                            id="Asignar_responsable_de_pnf"
                            name="Asignar_responsable_de_pnf">
                          <div class="form-group">
                            

                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usuarios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                              <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio"  class="form-check-input"  
                                      name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                                      <?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['correo'];?>

                                  </label>
                              </div>
                          <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                            </div>
                          <div class="form-group">
                              <input 
                              class="btn-enviar btn btn-sm btn-primary" 
                                type="submit" 
                                name="enviar" 
                                value="Siguiente">
                          </div>
                      </form>
                  </div>
              </div>
          </section>
            <?php }?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

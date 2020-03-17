<?php
/* Smarty version 3.1.30, created on 2020-03-16 18:36:38
  from "/home/palencia/public_html/proyecto4/uptt/templates/usuarios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6fff768efb98_78077377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f20745088feb4b99d548492de5e283b79b01666' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/usuarios.html',
      1 => 1584398174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:modal/modal_box.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e6fff768efb98_78077377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container">
    <div class="row">
        <div class="col-sm-2"> 

            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="col-sm-10">



<!--finaliza-->
<br>
<br>

            <h2  align="center"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_usuarios']->value;?>
</span>Usuarios <a class="btn btn-sm btn-outline-primary mimodal" type="button"
            data-href="agregar_admin.php" title="Agregar Usuario"><span class="fa fa-plus"></span></a></h2>

            <div class="collapse" id="collapseExample">
              <div class="jumbotron jumbo_buscar">
                <div class="container">  
                  <form action="usuarios.php" method="POST">
                      <div class="input-group">
                        <input id="p" name="p" type="text" class="form-control" placeholder="Escriba aquí y pulse INTRO" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1" style="padding:0 12px;"><i class="fa fa-search"></i></span>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          
           
              <table style="margin-top: 30px;" class="table table-striped table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th> Funciones</th>
                    <th><div class="btn-group">
                    <!-- a class="btn btn-sm btn-outline-primary" 
                    type="button"
                    href="agregar_persona.php"><span class="fa fa-plus"></span></a-->
                          
                    <button class="btn btn-sm btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" title="Buscar">
                    <samp class="fa fa-search"></samp>
                    </button>
                </div></th>
                  </tr>
                </thead>
                <tbody class="buscar" id="usuarios">
<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usuarios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['correo'];?>
</td>
                    <td class="text-center" style="white-space: nowrap;">
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default"
                      title="Ver detalles de usuarios" 
                      href="usuarios_datos.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-archive"></i>
                    </a>
                    
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Modificar Usuario" 
                      data-href="usuarios_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar Usuario" 
                      data-href="usuarios_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-trash"></i>
                    </a>

                    </td>
                  </tr>
<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                </tbody>
              </table>
                   <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['pagina_actual']->value != 1) {?>
              <li class="page-item"><a class="page-link" href="usuarios.php?pag=<?php echo $_smarty_tpl->tpl_vars['pagina_actual']->value-1;?>
&i=<?php echo $_smarty_tpl->tpl_vars['i']->value-$_smarty_tpl->tpl_vars['b']->value;?>
" >Anterior</a></li>
              <?php }?>
          <?php
$__section_ii_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ii']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii'] : false;
$__section_ii_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['paginas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ii_1_total = $__section_ii_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = new Smarty_Variable(array());
if ($__section_ii_1_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] <= $__section_ii_1_total; $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']++){
?>
          <li class="page-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['pagina_actual']->value) {?> active <?php }?>"><a class="page-link" href="usuarios.php?pag=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] : null);?>
&i=<?php echo $_smarty_tpl->tpl_vars['paginas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null)];?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] : null);?>
 <span class="sr-only">(current)</span></a></li>
          <?php
}
}
if ($__section_ii_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = $__section_ii_1_saved;
}
?>
            <?php if ($_smarty_tpl->tpl_vars['pagina_actual']->value != $_smarty_tpl->tpl_vars['n_paginas']->value) {?> 
              <li class="page-item"><a class="page-link" href="usuarios.php?pag=<?php echo $_smarty_tpl->tpl_vars['pagina_actual']->value+1;?>
&i=<?php echo $_smarty_tpl->tpl_vars['i']->value+$_smarty_tpl->tpl_vars['b']->value;?>
">Siguiente</a></li>
            <?php }?>
        </ul>
      </nav>
          </div>
        </div>

      </div>

<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

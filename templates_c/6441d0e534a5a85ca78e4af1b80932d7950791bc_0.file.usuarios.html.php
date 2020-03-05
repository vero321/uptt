<?php
/* Smarty version 3.1.30, created on 2020-03-04 20:53:23
  from "/home/jose/public_html/proyecto_iv/uptt/templates/usuarios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e604d83eee884_86522782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6441d0e534a5a85ca78e4af1b80932d7950791bc' => 
    array (
      0 => '/home/jose/public_html/proyecto_iv/uptt/templates/usuarios.html',
      1 => 1583369602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e604d83eee884_86522782 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h2 align="center">Usuarios <a class="btn btn-sm btn-outline-primary mimodal" type="button"
            data-href="#" title="Agregar usuario"><span class="fa fa-plus"></span></a></h2>

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
            <br>
            

              <table class="table table-striped table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Modificar</th>
                    <th> <div class="btn-group">
                    <!-- a class="btn btn-sm btn-outline-primary" 
                    type="button"
                    href="agregar_persona.php"><span class="fa fa-plus"></span></a-->
                          
                    <button class="btn btn-sm btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" title="Buscar">
                    <samp class="fa fa-search"></samp>
                    </button>
                </div></th>
                  </tr>
                </thead>
                <tbody class="buscar" id="personas">

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td class="text-center" style="white-space: nowrap;">
                    
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Modificar Usuario" 
                      data-href="usuarios_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <!--
                    <?php if ($_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['privilegio_id'] != "ADMINISTRADOR") {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Eliminar Usuario"
                      data-href="usuarios_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"> 
                      <i class="fa fa-trash-o"></i>
                    </a><?php } else { ?>
                      <a 
                        href="#" 
                        style="margin-bottom:3px; color:blue;" 
                        class="btn btn-default mimodal" >
                        <i class="fa fa-trash-o"></i>
                      </a>
                    <?php }?>
					-->
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Cambiar Clave" 
                      data-href="usuarios_cambiar_clave.php?id=<?php echo $_smarty_tpl->tpl_vars['d']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-unlock-alt"></i>
                    </a>

                    </td>
                  </tr>

                </tbody>
              </table>
              <a href="#" data-toggle="modal" data-target="#myModal">.</a>
          </div>
        </div>
      </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

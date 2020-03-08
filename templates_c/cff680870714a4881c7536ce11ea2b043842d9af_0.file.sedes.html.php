<?php
/* Smarty version 3.1.30, created on 2020-03-06 00:03:28
  from "/home/palencia/public_html/proyecto4/uptt/templates/sedes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e61cb901a4c99_05882325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cff680870714a4881c7536ce11ea2b043842d9af' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/sedes.html',
      1 => 1583466180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:modal/modal_box.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e61cb901a4c99_05882325 (Smarty_Internal_Template $_smarty_tpl) {
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

            <h2 align="center">Nucleos y Dependencias <a class="btn btn-sm btn-outline-primary mimodal" type="button"
            data-href="sedes_agregar.php" title="Agregar sede o dependencia"><span class="fa fa-plus"></span></a></h2>

            <div class="collapse" id="collapseExample">
              <div class="jumbotron jumbo_buscar">
                <div class="container">  
                  <form action="nucleos.php" method="POST">
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
                    <th>Nombre Largo</th>
                    <th>Nombre Corto</th>
                    <th>Funciones</th>
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

                    <td class="text-center" style="white-space: nowrap;">
                    
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Modificar Sede" 
                      data-href="sedes_modificar.php">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar Sede" 
                      data-href="sedes_eliminar.php">
                      <i class="fa fa-trash"></i>
                    </a>

                    </td>
                  </tr>

                </tbody>
              </table>
              <a href="#" data-toggle="modal" data-target="#myModal">.</a>
          </div>
        </div>
      </div>
<br><br><br><br><br><br><br><br><br>
<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:53:05
  from "/home/palencia/public_html/proyecto4/uptt/modulos/secciones/templates/seccion_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008ec915482b0_67072543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2b060c762f9bf9afbb847a1c615dc20c567c5e6' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/secciones/templates/seccion_eliminar.html',
      1 => 1611197578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008ec915482b0_67072543 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
      <div align="center" class="m-2 p-3">
          
          <h3 class="font-weight-bold">¿Desea eliminar <b><?php echo $_smarty_tpl->tpl_vars['seccion']->value['nombre'];?>
</b>?</h3> 
            <a  href="proc_seccion_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id_seccion']->value;?>
&id_trayecto=<?php echo $_smarty_tpl->tpl_vars['id_trayecto']->value;?>
"  class="btn btn-primary rounded-pill">SI</a>
            <a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill">NO</a>
      </div>
              
    </div>
  </div>
</div><?php }
}

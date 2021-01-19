<?php
/* Smarty version 3.1.30, created on 2021-01-18 12:21:14
  from "/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/observaciones_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6005b57a08aa17_86077180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c2245fd3e081e7a3d1226ae2606ea48aa3c726' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/observaciones_eliminar.html',
      1 => 1610986870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6005b57a08aa17_86077180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-5">
  <div class="row">
    <div class="col-md-12">  
      <div align="center">
          
          <h3>¿Desea eliminar <b><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</b>?</h3> 
            <a  href="../observaciones/proc_observaciones_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
"  class="btn btn-primary btn-circle rounded-pill">SI</a>
            <a  href="#" data-dismiss="modal" class="btn btn-secondary btn rounded-pill">NO</a>
      </div>
              
    </div>
  </div>
</div><?php }
}

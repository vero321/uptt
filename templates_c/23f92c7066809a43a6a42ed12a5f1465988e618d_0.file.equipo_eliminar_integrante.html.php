<?php
/* Smarty version 3.1.30, created on 2020-09-29 20:15:53
  from "/home/veronica/public_html/uptt/modulos/equipo/templates/equipo_eliminar_integrante.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f73ce39d72e81_30672301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f92c7066809a43a6a42ed12a5f1465988e618d' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/equipo/templates/equipo_eliminar_integrante.html',
      1 => 1600356298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73ce39d72e81_30672301 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
      <div align="center">
          
          <h3>¿Desea eliminar <b><?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>
</b>?</h3> 
            <a  href="proc_equipo_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&id_equipo=<?php echo $_smarty_tpl->tpl_vars['id_equipo']->value;?>
"  class="btn btn-primary">SI</a>
            <a  href="#" data-dismiss="modal" class="btn btn-secondary">NO</a>
      </div>
              
    </div>
  </div>
</div><?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-08-10 23:55:15
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3216a3244f64_66577603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfdc540bd3f9404b1f89f1aecc6742adba21d60a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_eliminar.html',
      1 => 1596593013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3216a3244f64_66577603 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
    	<div align="center">
    			
		      <h3>¿Desea eliminar <b><?php echo $_smarty_tpl->tpl_vars['trayectos']->value['trayecto'];?>
</b>?</h3> 
		        <a  href="proc_trayecto_pnf_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="btn btn-primary">SI</a>
		        <a  href="#" data-dismiss="modal" class="btn btn-secondary">NO</a>
    	</div>
              
    </div>
  </div>
</div><?php }
}

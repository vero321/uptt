<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:11:52
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayecto_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e2e86a90e1_90210391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4de023a49ba0ab3c5d04b9d9b7b51e289d015d' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos/templates/trayecto_eliminar.html',
      1 => 1611073924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008e2e86a90e1_90210391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
    	<div align="center">
    			
		      <h3>¿Desea eliminar <b><?php echo $_smarty_tpl->tpl_vars['trayecto']->value['trayecto'];?>
</b>?</h3> 
		        <a  href="proc_trayecto_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="btn btn-primary rounded-pill">SI</a>
		        <a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill">NO</a>
    	</div>
              
    </div>
  </div>
</div><?php }
}

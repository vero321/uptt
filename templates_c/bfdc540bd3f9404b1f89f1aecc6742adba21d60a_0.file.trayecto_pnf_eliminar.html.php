<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:54:04
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008eccc9bcb15_59487682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfdc540bd3f9404b1f89f1aecc6742adba21d60a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_eliminar.html',
      1 => 1611197642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008eccc9bcb15_59487682 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
    	<div align="center" class="m-3 p-2">
    			
		      <h3 class="font-weight-bold">¿Desea eliminar <b><?php echo $_smarty_tpl->tpl_vars['trayectos']->value['trayecto'];?>
</b>?</h3> 
		        <a  href="proc_trayecto_pnf_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="btn btn-primary rounded-pill">SI</a>
		        <a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill">NO</a>
    	</div>
              
    </div>
  </div>
</div><?php }
}

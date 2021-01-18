<?php
/* Smarty version 3.1.30, created on 2021-01-17 23:02:23
  from "/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6004fa3f434438_20192026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8352d4db0b4b15644b27df4bc70669b94ee3cfb1' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/TIPOS_DE_DOCUMENTOS/templates/tipos_eliminar.html',
      1 => 1610938745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004fa3f434438_20192026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
    	<div align="center" class="m-3">
    			
		      <h3 class="font-weight-bold text-gray-900 m-3">¿Desea eliminar <samp class="font-italic"> <?php echo $_smarty_tpl->tpl_vars['estructura']->value['nombre'];?>
</samp>?</h3> 
		        <a  href="proc_estructura_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['estructura']->value['id'];?>
"  class="btn btn-primary rounded-pill">SI</a>
		        <a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill">NO</a>
    	</div>
              
    </div>
  </div>
</div><?php }
}

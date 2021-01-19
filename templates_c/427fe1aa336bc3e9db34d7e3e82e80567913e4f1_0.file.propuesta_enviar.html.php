<?php
/* Smarty version 3.1.30, created on 2021-01-19 00:43:13
  from "/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta_enviar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600663619cf7a3_76786192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427fe1aa336bc3e9db34d7e3e82e80567913e4f1' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta_enviar.html',
      1 => 1611026437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600663619cf7a3_76786192 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-5">
  <div class="row">
    <div class="col-md-12">  
      <div align="center">
          
          <h3 class="font-weight-bold text-gray-900">¿Desea enviar la propuesta?</h3> 
            <a  href="proc_propuesta_enviar.php?id=<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
&e=<?php echo $_smarty_tpl->tpl_vars['datos']->value['e'];?>
"  class="btn btn-primary rounded-pill">SI</a>
            <a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill">NO</a>
      </div>
              
    </div>
  </div>
</div><?php }
}

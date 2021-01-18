<?php
/* Smarty version 3.1.30, created on 2021-01-14 10:22:04
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_enviar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6000538c828806_96305923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ea7930788f9435ad8568bfd3c3784d72df5e563' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_enviar.html',
      1 => 1609607675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6000538c828806_96305923 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
      <div align="center">
          
          <h3>¿Desea enviar la propuesta al profesor?</h3> 
            <a  href="proc_propuesta_enviar.php?id=<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
&e=<?php echo $_smarty_tpl->tpl_vars['datos']->value['e'];?>
"  class="btn btn-primary">SI</a>
            <a  href="#" data-dismiss="modal" class="btn btn-secondary">NO</a>
      </div>
              
    </div>
  </div>
</div><?php }
}

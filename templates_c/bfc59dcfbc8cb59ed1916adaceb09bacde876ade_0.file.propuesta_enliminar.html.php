<?php
/* Smarty version 3.1.30, created on 2021-01-18 12:15:04
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_enliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6005b408a94f40_69341801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfc59dcfbc8cb59ed1916adaceb09bacde876ade' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_enliminar.html',
      1 => 1610986500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6005b408a94f40_69341801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-5">
  <div class="row">
    <div class="col-md-12">  
      <div align="center">
          
          <h3 class="font-weight-bold text-gray-900">¿Desea Eliminar la propuesta?</h3> 
            <a  href="proc_propuesta_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
"  class="btn btn-primary rounded-pill">SI</a>
            <a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill">NO</a>
      </div>
              
    </div>
  </div>
</div><?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-07-20 10:06:11
  from "/home/palencia/public_html/proyecto4/uptt/modulos/modal/modal_box.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f15a4d39bc893_51950072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b53d40cd06dc1019d7d28a1b7ae6587d453a76' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/modal/modal_box.html',
      1 => 1595253965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f15a4d39bc893_51950072 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- The Modal -->z
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">


      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['prueba']->value;?>
</h4>

        <div class="btn-group">
          <button type="button" class="close btn btn-outline-danger" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>

<!-- Spinner 

<div class="text-center" style="position: absolute; top: 50%; left: 50%;">
  <div class="spinner-border text-primary" role="status" id="mi_spinner">
    <span class="sr-only">Loading...</span>
  </div>
</div>
--><?php }
}
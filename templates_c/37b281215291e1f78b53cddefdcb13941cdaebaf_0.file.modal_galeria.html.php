<?php
/* Smarty version 3.1.30, created on 2020-09-02 11:37:38
  from "/home/palencia/public_html/proyecto4/uptt/modulos/modal/modal_galeria.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f4fbc42466101_65559194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b281215291e1f78b53cddefdcb13941cdaebaf' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/modal/modal_galeria.html',
      1 => 1599008995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4fbc42466101_65559194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="image-gallery-title"></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
          <img id="image-gallery-image" class="img-responsive col-md-12" src="">
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
          </button>

          <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
          </button>
      </div>
    </div>
  </div>
</div><?php }
}

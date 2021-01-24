<?php
/* Smarty version 3.1.30, created on 2021-01-22 18:46:51
  from "/home/palencia/public_html/proyecto4/uptt/modulos/documentos/templates/documento_ver.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600b55db86c3d0_42265511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24deb540c14a3bd7e1178ee19dc038c61d432fa1' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/documentos/templates/documento_ver.html',
      1 => 1611355607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600b55db86c3d0_42265511 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-12">
		<iframe src="../../vendor/pdfjs/web/viewer.html?file=../../../tmp/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.pdf" class="iframe-pdf"></iframe>
	</div>
</div><?php }
}

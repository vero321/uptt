<?php
/* Smarty version 3.1.30, created on 2021-01-27 09:32:57
  from "/home/veronica/public_html/uptt/modulos/documentos/templates/documento_ver.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60116b8964c673_62743179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6f15dcc0a21eead1e57e2480a342d007a8490e4' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/documentos/templates/documento_ver.html',
      1 => 1611664959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60116b8964c673_62743179 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-12">
		<iframe src="../../vendor/pdfjs/web/viewer.html?file=../../../tmp/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.pdf" class="iframe-pdf"></iframe>
	</div>
</div><?php }
}

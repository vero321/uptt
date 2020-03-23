<?php
/* Smarty version 3.1.30, created on 2020-03-20 13:50:58
  from "/home/jose/public_html/proyecto4/uptt/templates/mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e750282d6b009_68006665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02c11657ba0e6ea5e1ec4563d90c59aabff65e0' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/mensaje.html',
      1 => 1584724193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_mensaje.html' => 1,
    'file:pie_mensaje.html' => 1,
  ),
),false)) {
function content_5e750282d6b009_68006665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_mensaje.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="jumbotron" style="margin-bottom: 0; background: #fff;!important">

            <div class="alert alert-dark" style="font-size: 1.4rem;">
                <?php echo $_smarty_tpl->tpl_vars['m']->value;?>

            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
" class="btn btn-dark" >Continuar</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie_mensaje.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

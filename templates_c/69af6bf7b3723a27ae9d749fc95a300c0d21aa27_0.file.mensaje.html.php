<?php
/* Smarty version 3.1.30, created on 2020-03-12 16:00:41
  from "/home/palencia/public_html/proyecto4/uptt/templates/mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6a94e93ce115_03259301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69af6bf7b3723a27ae9d749fc95a300c0d21aa27' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/mensaje.html',
      1 => 1556729084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_mensaje.html' => 1,
    'file:pie_mensaje.html' => 1,
  ),
),false)) {
function content_5e6a94e93ce115_03259301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_mensaje.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="jumbotron" style="margin-bottom: 0;">

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

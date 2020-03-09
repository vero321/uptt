<?php
/* Smarty version 3.1.30, created on 2020-03-08 22:08:03
  from "/home/veronica/public_html/uptt/templates/pie_mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e65a503a56f22_08260162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e6ed588e900786d3faeb4b37194f3da38d8e04' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/pie_mensaje.html',
      1 => 1583636619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e65a503a56f22_08260162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="footerTop" >
    <footer class="pie" style="position:relative; bottom: 0;margin-top: 0;" >
        Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández
        </footer>
  </nav>
    <?php echo '<script'; ?>
 src="./vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./vendor/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </div>
  </div>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html><?php }
}

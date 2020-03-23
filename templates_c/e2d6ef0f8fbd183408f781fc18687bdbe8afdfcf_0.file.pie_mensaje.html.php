<?php
/* Smarty version 3.1.30, created on 2020-03-20 13:50:58
  from "/home/jose/public_html/proyecto4/uptt/templates/pie_mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e750282dbf829_69430939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d6ef0f8fbd183408f781fc18687bdbe8afdfcf' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/pie_mensaje.html',
      1 => 1583863538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e750282dbf829_69430939 (Smarty_Internal_Template $_smarty_tpl) {
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

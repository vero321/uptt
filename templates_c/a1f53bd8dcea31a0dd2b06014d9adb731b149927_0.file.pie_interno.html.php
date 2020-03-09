<?php
/* Smarty version 3.1.30, created on 2020-03-08 21:13:22
  from "/home/veronica/public_html/uptt/templates/pie_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e65983236cdc5_49996082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f53bd8dcea31a0dd2b06014d9adb731b149927' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/pie_interno.html',
      1 => 1583604092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e65983236cdc5_49996082 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Comienzo del Pie de Página-->
<nav class="footerTop" >
    
    <footer class="pie_interno" style="position:relative; bottom: 0;" >
    	<div class="container-fluid">
			  <div class="row">
	  			<div class="col" >
        			Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández
        	</div>
        		
        </div>
      </div>


    </footer>


</nav>

    <?php echo '<script'; ?>
 src="./vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="./vendor/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js.js"><?php echo '</script'; ?>
>
<!--Final del Pie de Página-->

        
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html>
<?php }
}

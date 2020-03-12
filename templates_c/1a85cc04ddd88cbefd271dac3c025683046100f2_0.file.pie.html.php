<?php
/* Smarty version 3.1.30, created on 2020-03-10 22:52:34
  from "/home/jose/public_html/proyecto4/uptt/templates/pie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e685272f18e56_96989993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a85cc04ddd88cbefd271dac3c025683046100f2' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/pie.html',
      1 => 1583863538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e685272f18e56_96989993 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Comienzo del Pie de Página-->
<nav class="footerTop" >
    
    <footer class="pie" style="position:relative; bottom: 0;" >
    	<div class="container-fluid">
			  <div class="row">
	  			<div class="col" >
                    <p>
        			Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández</p>
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

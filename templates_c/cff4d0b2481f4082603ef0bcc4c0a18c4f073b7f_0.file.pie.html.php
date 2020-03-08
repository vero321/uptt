<?php
/* Smarty version 3.1.30, created on 2020-03-06 00:19:00
  from "/home/palencia/public_html/proyecto4/uptt/templates/pie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e61cf34e5f7d5_44874898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cff4d0b2481f4082603ef0bcc4c0a18c4f073b7f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/pie.html',
      1 => 1583468334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e61cf34e5f7d5_44874898 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Comienzo del Pie de Página-->
<nav class="footerTop" >
    
    <footer class="pie" >
    	<div class="container-fluid">
			<div class="row">
	  			<div class="col" >
        			Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández
        		</div>
        		<div class="col-3" align="right">
		    	<a class="icon enlace-oscuro" href="./manual/manual.pdf"
		    	title="Manual de uso"><i class="fa fa-question-circle" aria-hidden="true"></i> </a>
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
 src="./vendor/eModal/dist/eModal.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js.js"><?php echo '</script'; ?>
>

<!--Final del Pie de Página-->


<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>


</body>
</html><?php }
}

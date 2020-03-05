<?php
/* Smarty version 3.1.30, created on 2020-03-04 19:15:17
  from "/home/jose/public_html/proyecto_iv/uptt/templates/pie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e603685dee270_24443095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff0164062c7e116653a4e8a09cddf86527a2146' => 
    array (
      0 => '/home/jose/public_html/proyecto_iv/uptt/templates/pie.html',
      1 => 1583363716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e603685dee270_24443095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Comienzo del Pie de Página-->
<nav class="footerTop" >
    
    <footer class="pie" style="position:relative; bottom: 0;" >
    	<div class="container-fluid">
			<div class="row">
	  			<div class="col" >
        			Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández
        		</div>
        		<div class="col-3" align="right">
		    	<a class="icon enlace-claro" href="./manual/manual.pdf"
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
 src="js.js"><?php echo '</script'; ?>
>
<!--Final del Pie de Página-->

        

</body>
</html><?php }
}

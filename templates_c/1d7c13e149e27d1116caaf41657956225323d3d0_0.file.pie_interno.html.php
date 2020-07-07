<?php
/* Smarty version 3.1.30, created on 2020-07-04 12:59:02
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pie/pie_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f00b556d93c44_78198765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7c13e149e27d1116caaf41657956225323d3d0' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pie/pie_interno.html',
      1 => 1593638413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f00b556d93c44_78198765 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Comienzo del Pie de Página-->
<div class="espacio">
    
</div>    
    <footer class="pie_interno"  >
    	<div class="container-fluid">
			  <div class="row">
	  			<div class="col" >
        			Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández
        	</div>
        		
        </div>
      </div>


    </footer>



    <?php echo '<script'; ?>
 src="../../vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="../../vendor/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--Final del Pie de Página-->

        
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-07-03 23:56:29
  from "/home/palencia/public_html/proyecto4/uptt/templates/pie_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5efffded1f0be4_39571294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07326d89eab46ba07eaeb6e43486f1b8a6146c7c' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/pie_interno.html',
      1 => 1593833484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efffded1f0be4_39571294 (Smarty_Internal_Template $_smarty_tpl) {
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

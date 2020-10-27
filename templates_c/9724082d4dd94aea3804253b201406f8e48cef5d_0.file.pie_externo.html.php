<?php
/* Smarty version 3.1.30, created on 2020-10-27 08:20:26
  from "/home/veronica/public_html/uptt/modulos/pie/pie_externo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f98108a247987_51530827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9724082d4dd94aea3804253b201406f8e48cef5d' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/pie/pie_externo.html',
      1 => 1596465264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f98108a247987_51530827 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="../../vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--Final del Pie de Página-->

        
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html>
<?php }
}

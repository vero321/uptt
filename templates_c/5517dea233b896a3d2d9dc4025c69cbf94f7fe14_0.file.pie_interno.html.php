<?php
/* Smarty version 3.1.30, created on 2020-09-28 12:38:51
  from "/home/veronica/public_html/uptt/modulos/pie/pie_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f72119bf0a629_02887392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5517dea233b896a3d2d9dc4025c69cbf94f7fe14' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/pie/pie_interno.html',
      1 => 1596464775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f72119bf0a629_02887392 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Preparado para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../login/proc_exit.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>
<!--Comienzo del Pie de Página-->


      <footer style="margin-top: 2rem;" class="sticky-footer bg-gray-300">

        <div class="container my-auto">
          <div class="copyright text-center ">
            <span>Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández</span>
          </div>
        </div>
      </footer>
<!-- End of Footer -->
 



    </footer>




    <!--script src="../../vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
-->


    <?php echo '<script'; ?>
 src="../../vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="../../vendor/DataTables/datatables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../config/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!--para que funcionen los de exportar data table-->
    
    <?php echo '<script'; ?>
 src="../../vendor/DataTables/jquery/dataTables.buttons.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/DataTables/jquery/jszip.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/DataTables/jquery/pdfmake.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/DataTables/jquery/vfs_fonts.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/DataTables/jquery/buttons.html5.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/DataTables/jquery/buttons.print.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<!--Final del Pie de Página-->

        
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html>
<?php }
}

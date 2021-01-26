<?php
/* Smarty version 3.1.30, created on 2021-01-26 11:48:53
  from "/home/veronica/public_html/uptt/modulos/pie/pie_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601039e513d8d9_51199135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e030e32cf1ee6c146cd29ffdb2798e24e75f5e9' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/pie/pie_interno.html',
      1 => 1610987319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601039e513d8d9_51199135 (Smarty_Internal_Template $_smarty_tpl) {
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
          <h5 class="modal-title font-weight-bold text-gray-900" id="exampleModalLabel">¿Preparado para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <p class="text-gray-800">
        Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
        </p>

      </div>
        <div class="modal-footer">
          <button class="btn btn-secondary rounded-pill" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary rounded-pill " href="../login/proc_exit.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>
<!--Comienzo del Pie de Página-->


      <footer class="sticky-footer bg-gray-300 mt-5">

        <div class="container my-auto">
          <div class="copyright text-center ">
            <span>Realizado por Verónica Osuna, Karla Quintero, José Palencia y Brando Hernández</span>
          </div>
        </div>
      </footer>
<!-- End of Footer -->



    <?php echo '<script'; ?>
 src="../../vendor/jquery/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/DataTables/datatables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    

    <?php echo '<script'; ?>
 src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="../../vendor/js/main.js"><?php echo '</script'; ?>
>


        
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>

</body>
</html>
<?php }
}

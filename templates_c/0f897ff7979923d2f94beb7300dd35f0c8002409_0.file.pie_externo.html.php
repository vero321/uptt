<?php
/* Smarty version 3.1.30, created on 2021-01-28 18:34:26
  from "/home/palencia/public_html/proyecto4/uptt/modulos/pie/pie_externo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60133bf2701b91_89384485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f897ff7979923d2f94beb7300dd35f0c8002409' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/pie/pie_externo.html',
      1 => 1611873172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60133bf2701b91_89384485 (Smarty_Internal_Template $_smarty_tpl) {
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

        

<?php echo '<script'; ?>
 type="text/javascript">

$('.mimodal').click( function(){
  var dataURL = $(this).attr('data-href');
  
  $('.modal-body_repo').load(dataURL,function(){
      var etiqueta = dataURL.split('.php')[0];
      $('#myModal').modal({show:true});

  });
});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

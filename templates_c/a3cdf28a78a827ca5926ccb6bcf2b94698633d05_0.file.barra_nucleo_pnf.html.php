<?php
/* Smarty version 3.1.30, created on 2020-10-29 11:33:32
  from "/home/palencia/public_html/proyecto4/uptt/modulos/navegacion/barra_nucleo_pnf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9ae0cc02f050_46418718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3cdf28a78a827ca5926ccb6bcf2b94698633d05' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/navegacion/barra_nucleo_pnf.html',
      1 => 1603913231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9ae0cc02f050_46418718 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="container-fluid">
        <?php if (isset($_SESSION["numero"]) == true) {?>
          <div class="bg-gray-100 p-2 m-2">
            <?php if ($_SESSION["r"][$_SESSION["numero"]]['id_nucleo'] != NULL) {?>
              <strong class="text-info">Nucleo: </strong>
              <strong>
                  <?php echo $_SESSION["r"][$_SESSION["numero"]]['nucleo'];?>

             </strong>
            <?php }?>
            <?php if ($_SESSION["r"][$_SESSION["numero"]]['id_pnf'] != NULL) {?>
              <strong class="text-info">PNF: </strong>
              <strong>
                <?php echo $_SESSION["r"][$_SESSION["numero"]]['pnf'];?>

              </strong>
            <?php }?>
          </div>
        <?php }?>
        </div><?php }
}

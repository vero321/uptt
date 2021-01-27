<?php
/* Smarty version 3.1.30, created on 2021-01-26 23:51:56
  from "/home/veronica/public_html/uptt/modulos/navegacion/barra_nucleo_pnf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6010e35ce97be1_40923072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d20a9052d3331af0a3bb01b673d570612c46075' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/navegacion/barra_nucleo_pnf.html',
      1 => 1603971271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6010e35ce97be1_40923072 (Smarty_Internal_Template $_smarty_tpl) {
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

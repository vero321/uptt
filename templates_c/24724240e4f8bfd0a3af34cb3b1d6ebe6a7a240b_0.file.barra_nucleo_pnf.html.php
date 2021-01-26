<?php
/* Smarty version 3.1.30, created on 2021-01-26 10:12:41
  from "/home/veronica/public_html/uptt/modulos/navegacion/barra_nucleo_pnf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60102359ccf8d7_21921291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24724240e4f8bfd0a3af34cb3b1d6ebe6a7a240b' => 
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
function content_60102359ccf8d7_21921291 (Smarty_Internal_Template $_smarty_tpl) {
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

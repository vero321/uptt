<?php
/* Smarty version 3.1.30, created on 2020-11-10 23:30:06
  from "/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_secciones/trayectos_secciones.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fab5abe35d4e5_28233595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e295813f4a57d4fb55582ea2a122b37d98bef38a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/trayectos_secciones/trayectos_secciones.php',
      1 => 1605065404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fab5abe35d4e5_28233595 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php 
';?>define('MOD', 'trayectos_secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$smarty->display('trayectos_secciones.html');<?php }
}

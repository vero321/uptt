<?php
/* Smarty version 3.1.30, created on 2020-11-10 19:38:49
  from "/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/equipo_eliminar_integrante.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fab2489655d99_99215633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daee2c5ed90f449efcc79374f08ce9db9f40fe11' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/equipo_eliminar_integrante.html',
      1 => 1600306401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fab2489655d99_99215633 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
      <div align="center">
          
          <h3>¿Desea eliminar <b><?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>
</b>?</h3> 
            <a  href="proc_equipo_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&id_equipo=<?php echo $_smarty_tpl->tpl_vars['id_equipo']->value;?>
"  class="btn btn-primary">SI</a>
            <a  href="#" data-dismiss="modal" class="btn btn-secondary">NO</a>
      </div>
              
    </div>
  </div>
</div><?php }
}

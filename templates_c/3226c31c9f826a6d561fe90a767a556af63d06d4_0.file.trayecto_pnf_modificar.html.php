<?php
/* Smarty version 3.1.30, created on 2021-01-27 11:43:02
  from "/home/veronica/public_html/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60118a0664f952_36606243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3226c31c9f826a6d561fe90a767a556af63d06d4' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/trayectos_pnf/templates/trayecto_pnf_modificar.html',
      1 => 1611255560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60118a0664f952_36606243 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">  
    	<div align="center" class="p-2 m-3">
          <h3 class="font-weight-bold text-gray-900">Modificar Trayecto</h3>
    			<form action="proc_trayecto_pnf_modificar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
             <div class="form-group">
                <label for="exampleFormControlSelect1">Trayecto</label>
                 <select class="form-control" id="trayecto" name="trayecto">
                  <option class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['trayecto']->value['trayecto'];?>
</option>
                  <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['trayecto'];?>
</option>
                  <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                </select>
              </div>
            <input 
              class="btn-enviar btn btn btn-primary rounded-pill" 
              type="submit" 
              name="enviar" 
              value="Modificar">
            <a  href="#" data-dismiss="modal" class="btn btn-secondary">Cancelar</a>
    	</div>
    </div>
  </div>
</div><?php }
}

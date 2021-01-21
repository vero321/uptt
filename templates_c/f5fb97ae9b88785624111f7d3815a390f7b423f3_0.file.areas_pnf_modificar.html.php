<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:38:18
  from "/home/palencia/public_html/proyecto4/uptt/modulos/area/templates/areas_pnf_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e91ac31fc3_70220313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5fb97ae9b88785624111f7d3815a390f7b423f3' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/area/templates/areas_pnf_modificar.html',
      1 => 1611196215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008e91ac31fc3_70220313 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Modificar Area de Trabajo</h2>
        <form 
      action="proc_areas_pnf_modificar.php" 
      method="POST" 
      class="px-4 py-3" 
      id="areas_modificar"
      name="areas_modificar">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['areas']->value['id'];?>
">
      <div class="form-group">
        <div class="form-group">
          <label for="nombre">Nombre Completo</label>
          <input 
            type="text" 
            title="Escriba el Nombre Completo de la Línea de Investigación" 
            required="required" 
            class="form-control" 
            id="nombre" 
            name="nombre"
            placeholder="Jhon Doe"
            value="<?php echo $_smarty_tpl->tpl_vars['areas']->value['nombre'];?>
">
        </div> 

      <div class="form-group">
      <input 
        class="btn btn-primary rounded-pill" 
        type="submit" 
        name="enviar" 
        value="Modificar">
      </div>

    </form>
    </div>
    
  </div>
</div>


<?php }
}

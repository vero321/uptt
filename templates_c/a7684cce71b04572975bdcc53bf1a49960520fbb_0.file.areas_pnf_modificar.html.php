<?php
/* Smarty version 3.1.30, created on 2020-08-24 17:55:15
  from "/home/veronica/public_html/uptt/modulos/area/templates/areas_pnf_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f443743876195_97909235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7684cce71b04572975bdcc53bf1a49960520fbb' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/area/templates/areas_pnf_modificar.html',
      1 => 1598305894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f443743876195_97909235 (Smarty_Internal_Template $_smarty_tpl) {
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
        class="btn-enviar boton" 
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

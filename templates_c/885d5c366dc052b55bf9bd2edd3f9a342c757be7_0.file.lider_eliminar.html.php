<?php
/* Smarty version 3.1.30, created on 2020-11-14 14:49:13
  from "/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/lider_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fb026a9717931_04853243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '885d5c366dc052b55bf9bd2edd3f9a342c757be7' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/lider_eliminar.html',
      1 => 1602527842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb026a9717931_04853243 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Eliminar Equipo</h2>


  <form  

      action="../mensaje/mensaje_eliminar5.php"
      method="POST" 
      class="px-4 py-3" 
      id="lider_eliminar"
      name="lider_eliminar">
          <input type="hidden" name="id_persona" 
          value="<?php echo $_smarty_tpl->tpl_vars['lider']->value['id_persona'];?>
">
          <input type="hidden" name="si" value="../lider_seccion/proc_lider_eliminar.php">
          <input type="hidden" name="no" value="../lider_seccion/lider_seccion.php">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
">
      
          <div class="form-group">
          <label for="nombre_equipo">Nombre de Equipo</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="nombre_equipo" 
            name="nombre_equipo"
            placeholder="Escriba el Nombre Completo"
            value="<?php echo $_smarty_tpl->tpl_vars['lider']->value['nombre_equipo'];?>
"
            disabled="disabled">
        </div>
        <div class="form-group">
        <label for="id_persona">Líder</label>
          <input 
            type="text" 
            required="required" 
            class="form-control" 
            id="id_persona" 
            name="id_persona"
            placeholder="Escriba el Nombre Completo"
            value="<?php echo $_smarty_tpl->tpl_vars['lider']->value['id_persona'];?>
"
            disabled="disabled">
        </div>
    
        
        <div class="form-group">
      <input 
        class="btn-enviar boton" 
        type="submit" 
        name="enviar" 
        value="Eliminar">
      </div>

    </form>
    </div>
    
  </div>
</div>


<?php }
}

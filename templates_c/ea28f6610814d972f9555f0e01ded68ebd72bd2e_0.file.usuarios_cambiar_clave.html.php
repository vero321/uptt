<?php
/* Smarty version 3.1.30, created on 2020-07-30 13:54:44
  from "/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/usuarios_cambiar_clave.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f230964e38b62_32651231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea28f6610814d972f9555f0e01ded68ebd72bd2e' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/personas/templates/usuarios_cambiar_clave.html',
      1 => 1596131673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f230964e38b62_32651231 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container" >
    <div class="row" id="central_datos">
        
        <div class="col-sm-12"  >

    
        <h2 class="subtitulo" align="center">Cambiar Clave</h2>
        <form 
                      method="POST" 
                      class="px-4 py-3" 
                      id="cambiar_clave"
                      name="cambiar_clave" 
                      action="proc_cambiar_clave.php">

                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                        <div class="form-group">
                          <label for="clave0">Clave Actual</label>
                          <i onclick="clave()" class="fa fa-eye"></i>
                          <div class="input-group-addon"></div>
                          <input 
                            type="password" 
                            title="Escriba la Clave" 
                            required="required" 
                            class="form-control" 
                            id="clave" 
                            name="clave0">
                        
                        </div>

                        <div class="form-group">
                          <label for="clave1">Nueva Clave</label>
                          <i onclick="clave1()" class="fa fa-eye"></i>
                          <input 
                            type="password" 
                            title="Escriba la Clave" 
                            required="required" 
                            class="form-control" 
                            id="clave1"
                            name="clave1">
                            
                        </div>
                    
                        <div class="form-group">
                          <label for="clave2">Repita la Clave</label>
                          <i onclick="clave2()" class="fa fa-eye"></i>
                          <input 
                            type="password" 
                            title="Repita la Clave" 
                            required="required" 
                            class="form-control" 
                            id="clave2" 
                            name="clave2">
                             
                        </div>
                      <div class="form-group">
                        <input class="btn btn-primary" 
                          class="link float-left btn btn-light" 
                          type="submit" 
                          name="enviar" 
                          value="Guardar">
                      </div>
                    </form>


<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
>

<?php }
}

<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:28:11
  from "/home/palencia/public_html/proyecto4/uptt/modulos/area/templates/areas_pnf_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e6bb535004_65355539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54b1ba2857839ca9e08c649afe09de63eb2360f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/area/templates/areas_pnf_agregar.html',
      1 => 1611196080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6008e6bb535004_65355539 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">   
    <section id="home" class="text-center"></section>
        <section id="intro">
            <div class="container">
              <div class="centro"> 
                  <h2>Agreagar Area de Trabajo</h2>
                    <form 
                      action="proc_areas_pnf_agregar.php" 
                      method="POST" 
                      class="px-4 py-3" 
                      id="areas_agregar"
                      name="areas_agregar">
                    
                                          
                        <div class="form-group">
                          <label for="nombre">Nombre Completo</label>
                          <input 
                            type="text" 
                            title="Escriba el Nombre Completo del Area de Trabajo" 
                            required="required" 
                            class="form-control" 
                            id="nombre" 
                            name="nombre"
                            placeholder="Univerisdad Politecnica Mario.....">
                        </div>
                    
                    
                      <div class="form-group">
                        <input 
                          class="btn btn-primary rounded-pill" 
                          type="submit" 
                          name="enviar" 
                          value="Registrar">
                      </div>
                    </form>
              </div> 
            </div>
        </section>
  </div>
  <div class="col-2"></div>

</div>  
</div>








<?php }
}

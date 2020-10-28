<?php
/* Smarty version 3.1.30, created on 2020-10-28 12:01:04
  from "/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/agregar_equipo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f9995c0145cf8_01708739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e28f95ded03adcb45a375cfac3a3927d09d061' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/agregar_equipo.html',
      1 => 1602280454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9995c0145cf8_01708739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
  <div class="col-12">   
    <section id="home" class="text-center"></section>
      <section id="intro">
        <div class="container">
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Para agregar un Equipo</strong> no es necesario colocarle un nombre, el lider de equipo se puede encargar de esta tarea
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="centro"> 
            <h1 align="center">Agregar equipo</h1>
              <form 
               	action="proc_agregar_equipo.php" 
               	method="POST" 
               	class="px-4 py-3" 
               	id="registro_seccion"
               	name="registro_seccion">
                 <input type="hidden" name="id_seccion" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value;?>
">
                
               	<div class="form-group">
                	<label for="id">Nombre</label>
                	 <input 
                    type="text" 
                    title="Escriba la ci del Usuario" 
                    class="form-control" 
                    id="nombre" 
                    name="nombre" 
                    placeholder="escriba un nombre"
                    >
              	</div>                        
            	<div class="form-group">
  							<input 
  								class="btn-enviar btn btn-sm btn-primary" 
  								type="submit" 
  								name="enviar" 
  								value="Registrar">
            	</div>
            </form>
      </div> 
    </div>
  </section>
</div>

</div>  
</div>
<?php }
}

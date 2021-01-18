//inicio del documento

//Pantalla completa
$(document).ready(function() {
  $('#repo-fullscreen').on('click',function(e){
    if(document.fullscreenElement||document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement) 
    { /* Enter fullscreen */
    
    if(document.exitFullscreen) {
      document.exitFullscreen();
    } else if(document.msExitFullscreen) {
      document.msExitFullscreen(); /* IE/Edge */
    } else if(document.mozCancelFullScreen) {
      document.mozCancelFullScreen(); /* Firefox */
    } else if(document.webkitExitFullscreen) {
      document.webkitExitFullscreen(); /* Chrome, Safari & Opera */
    }
  } else { /* exit fullscreen */
    if(document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if(document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen();
    } else if(document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if(document.documentElement.msRequestFullscreen) {
      document.documentElement.msRequestFullscreen();
    }
  }

  });
});

// Recordar el estado del sidebar
$(document).ready(function(){
  if (typeof(Storage) !== 'undefined') {

  // Código cuando Storage es compatible
  let estado = sessionStorage.getItem('sidebar');
    $(".sidebar").toggleClass(estado);
} else {

 // Código cuando Storage NO es compatible

}
});

//
//Funciones del tema

(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if (typeof(Storage) !== 'undefined') {

      // Código cuando Storage es compatible
      var estado = sessionStorage.getItem('sidebar');
      if (estado === 'toggled') {
        sessionStorage.setItem('sidebar', '');
      }else{
        sessionStorage.setItem('sidebar', 'toggled');
      }
    }

    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict

//Datables
$(document).ready(function() {
    $('#tabla_repo').DataTable({ //escucha la id TABLA_REPO e inicia DataTablet 
        "language": { //caambia el idioma de los componentes
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"

                    }               

             },
        dom:'Bfrtip',
        buttons: { 
          buttons: [ 
            { extend: 'pdf', className: 'btn btn-outline-secondary', text: 'PDF <i class="fa fa-file-pdf"></i>' }, 
            { extend: 'print', className: 'btn btn-outline-secondary', text: 'Imprimir <i class="fa fa-print"></i>' } 
            ]
          }
        }); //fin

});

$(document).ready(function() {
    $('#tabla_repo1').DataTable({ //escucha la id TABLA_REPO e inicia DataTablet 
        "language": { //caambia el idioma de los componentes
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"

                    }               

             },
        dom: 'Bfrtip',
        buttons: { 
          buttons: [ 
            { extend: 'pdf', className: 'btn btn-outline-secondary', text: 'PDF <i class="fa fa-file-pdf"></i>' }, 
            { extend: 'print', className: 'btn btn-outline-secondary', text: 'Imprimir <i class="fa fa-print"></i>' } 
            ]
          }

        }); //fin

});

function clave() {
  var x = document.getElementById("clave");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function clave1() {
  var x = document.getElementById("clave1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function clave2() {
  var x = document.getElementById("clave2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}



//agregar un nuevo usuario usuando ajax

//abre el modal con el fomuñario y limpia el mormulario
$("#btn-agregar-usuario").click(function(){
    $("#from_registrar_usuario").trigger("reset");
    $('#modal_agregar_usuario').modal('show');      
});
//Registra el usuario
$('#from_registrar_usuario').submit(function(e){
    //Esta funcion maneja el formulario y su modal                        
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    id = $.trim($('#id').val()); 
    correo  = $.trim($('#correo').val());
    $.ajax({
          url: "../usuario/usuario_registrar_ajax.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id, correo:correo},    
          success: function(data) {
            alert(correo+'Se registro exitosamete. Para continuar vuelva a buscar los datos del usuario');
           }
        });                 
    $('#modal_agregar_usuario').modal('hide');//oculta el modal                                                          
});

//Tarjeta de usuario //
let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');


    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;


      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
          var id = $sel.data('id');
          var datos = $('#datos');
          $.ajax({
          url: "../personas/personas_tarjeta_ajax.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id}, 
          beforeSend: function(){
            //imagen de carga
              datos.html('<div class="d-flex justify-content-center m-5 p-5"><div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div></div');
            },   
          success: function(e) {
            usuario = JSON.parse(e);
            //datos.remove();
            if (usuario.nombre != null){
              $('#nombre').text(usuario.nombre);
            }else{
              $('#nombre').html('<small>El usuario aun no a actualizado su nombre</small');
            }
            
            h = '<li class="list-group-item text-gray-600 border-0"><i class="fa fa-envelope"></i><a class="btn btn-link" href="mailto:'+ usuario.email + '">' + usuario.email + '</a><br> <small class="font-weight-bold text-gray-800">Email</small></li>'; 
            if (usuario.telefono != null) {
            h = h + ' <li class="list-group-item text-gray-600 border-0"><i class="fa fa-phone" id="telefono"></i><a class="btn btn-link" href="tel:'+usuario.telefono+'">'+usuario.telefono+'</a><br> <small class="font-weight-bold text-gray-800">Teléfono</small></li>';
            }
            if (usuario.texto != null){
              h = h + '<li class="list-group-item border-0"><h5 class="font-weight-bold text-gray-900">Sobre mí</h5><p class="mb-1">'+usuario.texto+'</p></li>'
            }
            datos.html(h);
          }
        })
          
      }

      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

//
//abrir y cargar un modal
//

$('.mimodal').click( function(){
  var dataURL = $(this).attr('data-href');
  
  $('.modal-body_repo').load(dataURL,function(){
      var etiqueta = dataURL.split('.php')[0];
      $('#myModal').modal({show:true});

  });
});

//select comunidad
$(document).ready(function(){
  //bloquea el SELECT

  // Hacemos la lógica que cuando nuestro SELECT cambia de valor haga algo
    $("#buscar_comunidad").keyup(function(){
        $('#btn-comunidad').prop('disabled', true);
        // Guardamos el select de municipio
        var comunidad = $("#comunidad");
        // Guardamos el select de comunidad
        var buscar = $(this).val();
        

        if( buscar != '')
        {
            $.ajax({
                url:   '../comunidades/comunidad_buscar_ajax.php',
                type:  'POST',
                dataType: 'json',
                data: { buscar : buscar },
                success:  function (data) 
                {
                    // Limpiamos el select
                    comunidad.find('option').remove();
                  if (data != 0){

                    $(data).each(function(i, v){ // indice, valor
                        comunidad.append('<option value="' + v.id + '">' + v.nombre_comunidad + '</option>');
                    })
                  }else{
                    var alerta = $('#alerta-comunidad');
                    alerta.empty();
                    alerta.append(' <div class="alert alert-info alert-dismissible fade show" role="alert"><strong>Importate!</strong> No se a encontrado ninguna comunidad registrada, para continuar precione el boton [+] y registre la comunidad. <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
                    $('#btn-comunidad').prop('disabled', false);
                  }
                },
                error: function()
                {
                  alert('Ocurrio un error en el servidor comunicate con el administrados..');
                }
            });
        }
        else
        {
            comunidad.find('option').remove();
        }
        
    })
});

//abrir modal comunidades   
$("#btn-comunidad").click(function(e){
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    opcion_usuario = 2; //alta           
    cedula=null;
    $("#from_datos_comunidad").trigger("reset");
    $('#municipio').find('option').remove()
    $('#parroquia').find('option').remove()
    $("#municipio").prop('disabled', true)
    $("#parroquia").prop('disabled', true)
    $('#modal_comunidad').modal('show')      
});

$('#from_datos_comunidad').submit(function(e) { 
  e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página

  var $inputs = $('#from_datos_comunidad :input'); 
  var valores = {}; 
  $inputs.each(function() { 
  valores[this.name] = $(this).val(); 
  }); 

  $.ajax({
    url: "../comunidades/comunidad_ajax.php",
    type: "POST",
    datatype:"json",    
    data:  {valores:valores},
    success: function(data){
      if (data != 0) {
         var alerta = $('#alerta-comunidad');
      alerta.empty();
      alerta.append(' <div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Alerta</strong>Ocurrio un error en servidor <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
      }else{
      var alerta = $('#alerta-comunidad');
      alerta.empty();
      alerta.append(' <div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Importate</strong> La comunidad fue registrada exitosamete, para continuar escriba el nombre o las siglas de la comunidad y selecionela. <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
      }
    },
    error: function(){
      alert('Ocurrio un error en el servidor ..');
    } 
          
    });
    $('#modal_comunidad').modal('hide');//oculta el modal

}); 



//Funciones para rellenar SELECTS
$(document).ready(function(){
  //bloquea el SELECT
  $("#municipio").prop('disabled', true)
  $("#parroquia").prop('disabled', true)

  // Hacemos la lógica que cuando nuestro SELECT cambia de valor haga algo
    $("#estado").change(function(){
        // Guardamos el select de municipio
        var municipio = $("#municipio");

        // Guardamos el select de municipio
        var estado = $(this).val();
        
        // Guardamos elvalor 0 para indicar buscamos  municipio
        var opcion = 0;

        if( estado != '')
        {
            $.ajax({
                url:   '../localidad/localidad_ajax.php',
                type:  'POST',
                dataType: 'json',
                data: { estado : estado, opcion, opcion },
                beforeSend: function () 
                {
                    municipio.prop('disabled', true);
                },
                success:  function (data) 
                {
                    municipio.prop('disabled', false);
                    $('#parroquia').prop('disabled', true);

                    // Limpiamos el select
                    municipio.find('option').remove();
                    $('#parroquia').find('option').remove();

                    $(data).each(function(i, v){ // indice, valor
                      municipio.append('<option value="' + v.id + '">' + v.nombre + '</option>');
                    })

                    municipio.prop('disabled', false);
                },
                error: function(){
                  alert('Ocurrio un error en el servidor ..');
                  municipio.prop('disabled', false);
                }
            });
        }
        else
        {
            municipio.find('option').remove();
            municipio.prop('disabled', true);
        }
        
    })
});

$(document).ready(function(){
  //bloquea el SELECT
  $("#parroquia").prop('disabled', true)

  // Hacemos la lógica que cuando nuestro SELECT cambia de valor haga algo
    $("#municipio").change(function(){
        // Guardamos el select de municipio
        var parroquia = $("#parroquia");

        // Guardamos el select de parroquia
        var municipio = $(this).val();
        
        // Guardamos elvalor 0 para indicar buscamos parroquia
        var opcion = 1;

        if( municipio != '')
        {
            $.ajax({
                url:   '../localidad/localidad_ajax.php',
                type:  'POST',
                dataType: 'json',
                data: { municipio : municipio, opcion, opcion },
                beforeSend: function () 
                {
                    parroquia.prop('disabled', true);
                },
                success:  function (data) 
                {
                    parroquia.prop('disabled', false);

                    // Limpiamos el select
                    parroquia.find('option').remove();

                    $(data).each(function(i, v){ // indice, valor
                        parroquia.append('<option value="' + v.id + '">' + v.nombre + '</option>');
                    })

                    parroquia.prop('disabled', false);
                },
                error: function()
                {
                    alert('Ocurrio un error en el servidor ..');
                    parroquia.prop('disabled', false);
                }
            });
        }
        else
        {
            parroquia.find('option').remove();
            parroquia.prop('disabled', true);
        }
        
    })
});
//tabla propupuestas disponibles
$(document).ready(function() {
  $('#propuestas_disponibles-tab').click(function(){
    var equipo = $(this).attr('data-equipo');
    var propuestas= $('#tabla_disponibles').DataTable({ 
        "destroy": true, 
        "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
             },
        //Solicitamos los datos para la tabla   
        "ajax":{            
            "url": "propuestas_disponibles_ajax.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{equipo:equipo},
            "dataSrc":""
        },//Asignamos los datos a las columnas correspondientes
        "columns":[
            {"data": "codigo"},
            {"data": "codigo_propuesta"},
            {"data": "descripcion"},
            {"data": "objetivo"},
            {"defaultContent": "<div class='text-center'><button class='btn btn-outline-info btn-sm btn_propuesta_info' title='Ver informacion de la propuesta'><i class='fa fa-info-circle'></i></button></div>"}
        ]
    });
  })
});

$(document).ready(function(){
  $('.btn_propuesta_info')
});

//wizar
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});

$(document).on("click", ".btn_propuesta_info", function(){               
    fila = $(this).closest("tr");           
    id_propuesta = fila.find('td:eq(1)').text();; //capturo el id de la propuesta
    var URL = '../propuesta/propuesta_disponible.php?id='+id_propuesta;
    window.location = URL;
    /*  
    $('.modal-body_repo').load(URL,function(){
      var etiqueta = URL.split('.php')[0];
      $('#myModal').modal({show:true});
    });
    */

  });
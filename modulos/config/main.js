//inicio del documento
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
        dom: 'Bfrtip',
        buttons: [
             'pdf', 'print',
        ]

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

(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
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

//agregar un nuevo usuario usuando ajax

//abre el modal con el fomuñario y limpia el mormulario
$("#btn-agregar-usuario").click(function(){
    $("#from_registrar_usuario").trigger("reset");
    $('#modal_agregar_usuario').modal('show');      
});

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
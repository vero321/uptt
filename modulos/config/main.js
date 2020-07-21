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

                    },
                    "export":{
                    "dom": "Bfrtip",
                    "buttons": [
                        'copy', 'csv', 'excel', "pdf", 'print'
                              ]
                    }


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

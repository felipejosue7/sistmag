
<body>

  <div class="wrapper ">
    <?php require_once "vista/menu.php";?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">
              Gestión de Pacientes
            </a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">



          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">
                    Consulta de Pacientes
                  </h4>
                  <p class="card-category">
                    Por favor ingrese el N° de Cédula a consultar
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </i>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive datatables">
                  <table class="table display" data-toggle="table" id="paciente">
                    <thead class=" text-info">
                      <tr>
                        <td>
                          Cédula
                        </td>
                        <td>
                          Nombres
                        </td>
                        <td>
                          Apellidos
                        </td>
                        <td>
                          Teléfono
                        </td>
                        <td>
                          Sexo
                        </td>
                        <td>
                          Dirección
                        </td>
                        <td>
                          Peso (Kgs)
                        </td>
                        <td>
                          Fecha Nacimiento
                        </td>                        
                        <td class="text-right">
                          Acciones
                        </td>                        
                        <td>
                          Pruebas, Tratamientos
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($datos as $paciente =>
                        $valor) :  ?>
                        <tr class="table-success">
                          <td>
                            <?php echo $valor->
                            cedula_paciente; ?>
                          </td>
                          <td>
                            <?php echo $valor->
                            nombre_paciente; ?>
                          </td>
                          <td>
                            <?php echo $valor->
                            apellido_paciente; ?>
                          </td>
                          <td>
                            <?php echo $valor->
                            telefono_paciente; ?>
                          </td>
                          <td>
                            <?php echo $valor->
                            sexo_paciente; ?>
                          </td>
                          <td>
                            <?php echo $valor->
                            direccion_paciente; ?>
                          </td>
                          <td>
                            <?php echo $valor->
                            peso_paciente; ?>
                          </td>
                          <td>
                            <?php echo $valor->
                            fecha_nacimiento; ?>
                          </td>
                          <!-- td para las acciones -->
                          


                          <td class="td-actions text-right">
                            <!-- Boton para modificar registro-->
                            <button class="btn btn-success btn-sm editar btn-round" data-original-title="" id="editar" title="" type="button" value="<?php echo $valor->id_paciente; ?>">
                              <i aria-hidden="true" class="fa fa-pencil-square-o"></i>
                            </button>
                            <!-- Boton modal para prueba-->
                            <?php if ($_SESSION['descripcion']=='administrador'): ?>
                              <!-- Boton para eliminar registro-->
                              <button class="btn btn-danger btn-sm eli btn-round" data-target="#modalEliminar<?php echo $valor->id_paciente; ?>" data-toggle="modal" id="eliminar1" type="button" value="<?php echo $valor->id_paciente; ?>">
                                <i aria-hidden="true" class="fa fa-trash"></i>
                              </button>
                            </td>
                            <!-- fin del  td para las acciones -->
                          <?php endif ?>
                          <!--  td para tratamiento medico y prueba   -->
                          <td>
                            <button class="btn btn-warning btn-sm btn-round" data-target="#pruebaModal<?php echo $valor->id_paciente; ?>" data-toggle="modal" id="prueba" type="button" value="<?php echo $valor->id_paciente; ?>">
                              <i class="fa fa-stethoscope" aria-hidden="true"></i>
                              
                            </button>
                            <button class="btn btn-primary btn-sm btn-round" data-target="#tratamientoModal<?php echo $valor->id_paciente; ?>" data-toggle="modal" id="tratamiento" type="button" value="<?php echo $valor->id_paciente; ?>">
                              <i class="fa fa-user-md" aria-hidden="true"></i>
                              
                            </button>
                            <!-- Boton modal para detalles -->
                            <button class="btn btn-info btn-sm btn-round" data-target="#detalleModal<?php echo $valor->id_paciente; ?>" data-toggle="modal" id="detalle" type="button" value="<?php echo $valor->id_paciente; ?>">
                              <i class="fa fa-info-circle" aria-hidden="true"></i>
                              
                            </button>
                            <!-- cierre boton modal para detalles -->
                            <!-- Boton Modal Para Recaidas  -->
                            <button class="btn btn-secondary btn-sm btn-round" data-target="#recaidaModal<?php echo $valor->id_paciente; ?>" data-toggle="modal" id="recaida" type="button" value="<?php echo $valor->id_paciente; ?>">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                              
                            </button>
                            <!-- Fin Boton Modal Recaida -->
                          </td>
                          <!-- cierre td para tratamiento medico y prueba  -->
                        </tr>
                      <?php endforeach; ?>

                    </tbody>
                  </table>
                </div>
                <input type="hidden" name="registroUsuario" value="si">      
                <button type="submit" class="btn btn-danger btn-sm pull-right btn-round" href="index.php">Inicio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <?php require_once "vista/modales.php";?>
    <!-- Modal para eliminar registro-->
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="modalEliminar<?php echo $valor->id_paciente; ?>" role="dialog" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEliminarLabel">
              ¿Desea eliminar el registro de:?
            </h5>
            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
              <span aria-hidden="true">
              </span>
            </button>
          </div>
          <div class="modal-body">            
            <?php echo $valor->
            cedula_paciente; ?>
            <?php echo $valor->
            nombre_paciente; ?>
            <?php echo $valor->
            apellido_paciente; ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-sm btn-round" data-dismiss="modal" type="button">
              Cerrar
            </button>
            <button class="btn btn-danger btn-sm btn-round eliminar" id="eliminar<?php echo $valor->id_paciente; ?>" type="button" value="<?php echo $valor->id_paciente; ?>">
              Eliminar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de Modal Para eliminar registro -->



    



    <!--  <input type="hidden" name="modificarPaciente" value="si"> -->




    <?php require_once "vista/pie.php";?>





    <script type="text/javascript">
      $(document).ready(function() {


        $( ".eliminar" ).on('click', function(event) {
         event.preventDefault();
         /* Act on the event */
         var id=$(this).val();

         $.ajax({
          type: "POST",
          url: "",
          data: 'eliminarregistro=si&id_paciente='+id,
          success: function(data) {
            $('.modal').remove();
            location.reload();
        //$('#paciente').DataTable().ajax.reload();
      }
    });

       });

        $( ".editar" ).on('click', function(event) {
          event.preventDefault();
          /* Act on the event */
          var id=$(this).val();

          location.href="?accion=editarPaciente&editarregistro=si&id_paciente="+id;

        });


        $('#paciente').DataTable( {
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
              "sPrevious": "Anterior",
              "pagingType": "scrolling",

            },
            "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
          }

        });


        $("#estado").on('change', function () {
          $("#estado option:selected").each(function () {

            elegido=$(this).val();

            $.get("?accion=municipio",
              { elegido: elegido },
              function(data){
                console.log(data);

                $("#cbx_municipio").html(data);

              });
          });
        });



        $("#cbx_municipio").on('change', function () {
          /* Act on the event */

          $("#cbx_municipio option:selected").each(function () {

            elegido=$(this).val();
            //alert(elegido);
            $.get("?accion=parroquia",
              { elegido: elegido },
              function(data){
                console.log(data);

                   // $("#municipio").empty(); //limpiamos lo que hay

                    /*$.each(data, function (index, item) {
                      $("<option/>")
                      .attr("value", item.id)
                      .text(item.nombre)
                      .appendTo("#municipio");

                    });
                    */
                   // $("#p").html(data);
                    //alert($("#municipio").html());
                    $("#cbx_parroquia").html(data);

                  });
          });
        });

        $( "#form_prueba" ).on( "submit", function( event ) {

          event.preventDefault();
          id= $('#prueba').val();
          var dataString = $('#form_prueba').serialize();

          alert('Datos serializados: '+dataString);

          $.ajax({
            type: "POST",
            url: "",
            data: dataString,
            success: function(data) {

              alert("PRUEBA Paciente Registrada");
              $('.modal').remove();
              console.log(data);
             // window.location='?accion=consultarPaciente';
           }
         });
        });

        $( "#form_tratamiento" ).on( "submit", function( event ) {

          event.preventDefault();
          id= $('#idtratamiento').val();
          var dataString = $('#form_tratamiento').serialize();

          alert('Datos serializados: '+dataString);

          $.ajax({
            type: "POST",
            url: "",
            data: dataString,
            success: function(data) {

              alert("Tratamiento Paciente Registrada");
              $('.modal').remove();
              console.log(data);
             // window.location='?accion=consultarPaciente';
           }
         });
        });

      });
    </script>

  </body>


<div class="wrapper ">
 <?php require_once("vista/menu.php"); ?>
 
 <div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href=""> Gestión de Pacientes</a>
      </div>        
    </div>
  </nav>
  <!-- End Navbar -->     
  
  <div class="content">
    <div class="card card-nav-tabs card-plain">
      <div class="row">
        <div class="col-md-12">
          <div class="card-header card-header-danger">
            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <span class="navbar-text"> Seleccione las opciones...    </span>
                  <li class="nav-item">

                  </li>
                  <br>
                  <li class="nav-item">
                    <a class="nav-link active" href="#home" data-toggle="tab">Datos del Paciente</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#updates" data-toggle="tab">Datos Médicos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#history" data-toggle="tab">Datos del Tratamiento</a>
                  </li>                     
                </ul>             
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="card-body ">
          <div class="tab-content text-center">
            <div class="tab-pane active" id="home">
              <form method="post" action="" id="form_registro">
                <div class="form-row">
                  <div class="form-group label-floating has-success col-md-2">
                    <label for="cedula" class="bmd-label-floating">Cédula</label>
                    <input type="text" class="form-control" name="cedula" id="inputcedula" required="required" minlength="6" maxlength="8">
                  </div>

                  <div class="form-group label-floating has-success col-md-5">
                    <label for="nombres" class="bmd-label-floating">Nombres</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required="required" maxlength="35">
                  </div>
                  
                  <div class="form-group label-floating has-success col-md-5"> 
                    <label for="apellidos" class="bmd-label-floating">Apellidos</label>  
                    <input type="text" class="form-control" name="apellido" id="apellido" required="required" maxlength="40">
                  </div>
                </div>
                
                <div class="form-row">
                  <div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
                    <label for="correo" class="bmd-label-floating">Correo</label>     
                    <input type="email" class="form-control" name="correo" id="correo" required="required" maxlength="40">
                  </div>

                  <div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
                    <label for="direccion" class="bmd-label-floating">Dirección</label>     
                    <input type="text" class="form-control" name="direccion" id="direccion" required="required">      
                  </div>

                  <div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
                    <label for="ocupacion" class="bmd-label-floating">Ocupación</label>
                    <input type="text" class="form-control" name="ocupacion" id="ocupacion" required="required">      
                  </div>     
                </div>
                
                <div class="form-row">
                  <div class=" col-lg-4 col-md-4 col-sm-4">      
                    <select class="selectpicker" type="selectpicker" id="estado" name="estado" data-style="btn btn-success btn-round">
                      <option disabled selected>Seleccione Estado</option>

                      <?php //foreach ($datosEstados as $estado => $valor) { ?>
                        <option value="<?php //echo $valor->id ?>"><?php //echo $valor->nombre ?></option>
                        <option value="2">Lara</option>
                        <option value="3">Bolivar</option>

                        <?php//   } ?>
                      </select>     
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="selectpicker" type="selectpicker" name="municipio" id="municipio" data-style="btn btn-success btn-round">
                        <option disabled selected>Seleccione Municipio</option>
                        <option value="2">Lara</option>
                        <option value="3">Bolivar</option>
                      </select>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="selectpicker" type="selectpicker" name="parroquia" id="parroquia" data-style="btn btn-success btn-round">
                        <option disabled selected>Seleccione Parroquia</option>
                        <option value="2">Lara</option>
                        <option value="3">Bolivar</option>
                        <option value="4">Sucre</option>
                        <option value="5">Amazonas</option>
                        <option value="6">Zulia</option>
                      </select>
                    </div>    



                  </div>

              <!--    <div class="form-row">  
                    <div class="col-lg-3 col-md-3 col-sm-3">
                      <div class="dropdown bootstrap-select">
                        <select class="selectpicker" type="selectpicker" name="telefonofijo" id="telefonofijo" data-style="btn btn-success btn-round" >
                          <option disabled selected>Telefono Fijo</option>
                          <option value="2">0251</option>
                          <option value="3">0254</option>
                          <option value="4">0271</option>
                          <option value="5">0234</option>
                          <option value="6">0212</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group label-floating has-success col-md-3">
                      <label for="telefonofijo1" class="bmd-label-floating">Teléfono Fijo</label>
                      <input type="text" class="form-control" name="tlfijo" id="tlfijo" >
                    </div> 


                    <div class="col-lg-3 col-md-3 col-sm-3">    
                      <select class="selectpicker" type="selectpicker" name="telefonomovil" id="telefonomovil" data-style="btn btn-success btn-round" required="required">
                        <option disabled selected> Telefono Móvil</option>
                        <option value="2">0416</option>
                        <option value="3">0426</option>
                        <option value="4">0414</option>
                        <option value="5">0424</option>
                        <option value="6">0412</option>
                      </select>
                    </div> -->

                    <div class="form-group label-floating has-success col-md-3">
                      <label for="telefonomovil" type="selectpicker" class="bmd-label-floating">Teléfono Móvil</label>
                      <input type="text" class="form-control" name="tlfmovil" id="tlfmovil" required="required">
                    </div>          

                  </div>

                  <div class="form-row">  
                    <div class="col-lg-3 col-md-3 col-sm-3">    
                      <select class="selectpicker" type="selectpicker" name="edocivil" id="edocivil" data-style="btn btn-success btn-round">
                        <option disabled selected>Estado Civil</option>
                        <option value="2">Soltero(a)</option>
                        <option value="3">Casado(a)</option>
                        <option value="4">Divorciado(a)</option>
                        <option value="5">Viudo(a)</option>
                        
                      </select>
                    </div>
                    
                    <div class="form-group label-floating has-success col-md-3">
                      <label for="nombrerep" class="bmd-label-floating">Representante</label>
                      <input type="text" name="representante" id="representante" class="form-control" id="nombrerep">
                    </div>

                    <div class="form-group label-floating has-success col-md-3">
                      <label for="etnia" class="bmd-label-floating">Etnia</label>
                      <input type="text" name="etnia" id="etnia" class="form-control" id="etnia">
                    </div>
                  </div>  

                </div>

                <div class="tab-pane" id="updates">              
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="">Embarazo:</label>
                      <select class="form-control selectpicker" type="selectpicker" name="embarazo" data-style="btn btn-success btn-round" id="embarazo">
                        <option value="0">Seleccionar</option>
                        <option>1 semana</option>
                        <option>2 semanas</option>
                        <option>3 semanas</option>
                        <option>4 semanas</option>
                        <option>5 semanas</option>
                        <option>6 semanas</option>
                        <option>7 semanas</option>
                        <option>8 semanas</option>
                        <option>9 semanas</option>
                        <option>10 semanas</option>      
                      </select>
                    </div>       

                    <div class="form-group col-md-3">
                      <label for="">Madre Lactante:</label>
                      <select class="form-control selectpicker" type="selectpicker" name="mlactante" data-style="btn btn-success btn-round" id="mlactante">
                        <option value="0">Seleccionar</option>
                        <option>1 mes</option>
                        <option>2 meses</option>
                        <option>3 meses</option>
                        <option>4 meses</option>
                        <option>5 meses</option>
                        <option>6 meses</option>
                        <option>7 meses</option>
                        <option>8 meses</option>
                        <option>9 meses</option>
                        <option>10 meses</option>      
                      </select>
                    </div>
                    
                    <div class="form-group col-md-3">
                      <label for="">Lactantes:</label>
                      <select class="form-control selectpicker" type="selectpicker" name="lactante" data-style="btn btn-success btn-round" id="lactante">
                        <option value="0">Seleccionar</option>
                        <option>1 mes</option>
                        <option>2 meses</option>
                        <option>3 meses</option>
                        <option>4 meses</option>
                        <option>5 meses</option>
                        <option>6 meses</option>
                        <option>7 meses</option>
                        <option>8 meses</option>
                        <option>9 meses</option>
                        <option>10 meses</option>      
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="">Tipo de prueba:</label>
                      <select class="form-control selectpicker" type="selectpicker" name="tprueba" data-style="btn btn-success btn-round" id="tprueba">
                        <option value="0">Seleccionar</option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>      
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="">Tipo Búsqueda:</label>
                      <select class="form-control selectpicker" type="selectpicker" data-style="btn btn-success btn-round" name="tbusqueda" id="tbusqueda">
                        <option value="0">Seleccionar</option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>      
                      </select>
                    </div>





                    
                    <!-- input with datetimepicker -->
                    <div class="form-group">
                      <label class="label-control">Datetime Picker</label>
                      <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                    </div>

                  </div>                 
                </div>

                <div class="tab-pane" id="history">
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="">Medicamentos:</label>
                      <select class="form-control selectpicker" type="selectpicker" data-style="btn btn-success btn-round" name="medicamentos" id="medicamentos">
                        <option value="0">Seleccionar</option>
                        <option>Cloroquina</option>
                        <option>Primaquina (5mg)</option>
                        <option>Primaquina (7,5mg)</option>
                        <option>Primaquina (15mg)</option>
                        <option>Arthemether+Lumenfartin</option>
                        <option>Arthemether</option>
                        <option>Quinina (amp)</option>
                        <option>Artesunato (amp)</option>
                      </select>
                    </div> 

                    <div class="form-group col-md-3">
                      <label for="">Cantidad:</label>
                      <select class="form-control selectpicker" type="selectpicker" data-style="btn btn-success btn-round" name="cantidad" id="cantidad">
                        <option value="0">Seleccionar</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control header-success" name="observaciones" id="observaciones" rows="3"></textarea>
                  </div>
                  
                  
                  
                  <a  class="btn btn-danger pull-right btn-round" role="button" href="<?php echo RUTA ?>/?accion=principal">Inicio</a>

                  <div>
                    <input class="btn" type="hidden" name="guardarregistro" value="si">
                    <button type="submit" class="btn btn-danger pull-right btn-round" id="guardarregistro">Guardar Datos</button>
                  </div>
                </div>
                
                <div id="exito" style="display:none">
                  Sus datos han sido recibidos con éxito.
                </div>
                <div id="fracaso" style="display:none">
                  Se ha producido un error durante el envío de datos.
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php require_once("vista/pie.php"); ?>
        
        <script type="text/javascript">






          $(document).ready(function() {

            $('select').selectpicker();

/*$("#estado").on('change', function () {
        $("#estado option:selected").each(function () {
            elegido=$(this).val();
            $.get("?accion=municipio", { elegido: elegido }, function(data){
               console.log(data);

               $("#municipio").empty(); //limpiamos lo que hay
              $.each(data, function (index, item) {
                                $("<option/>")
                                        .attr("value", item.id)
                                        .text(item.nombre)
                                        .appendTo("#municipio");

                            });

            });     
        });
      }); */
      $('.datetimepicker').datetimepicker({
        icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: 'fa fa-chevron-left',
          next: 'fa fa-chevron-right',
          today: 'fa fa-screenshot',
          clear: 'fa fa-trash',
          close: 'fa fa-remove'
        }
      });
      
/*
$.extend(true, $.fn.datetimepicker.defaults, {
    icons: {
      time: 'far fa-clock',
      date: 'far fa-calendar',
      up: 'fas fa-arrow-up',
      down: 'fas fa-arrow-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right',
      today: 'fas fa-calendar-check',
      clear: 'far fa-trash-alt',
      close: 'far fa-times-circle'
    }


  });
  */




  $( "#form_registro" ).on( "submit", function( event ) {

    event.preventDefault();

    var dataString = $('#form_registro').serialize();

       // alert('Datos serializados: '+dataString);

       $.ajax({
        type: "POST",
        url: "",
        data: dataString,
        success: function(data) {

        }
      });
     });
});
</script>


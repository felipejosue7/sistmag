<?php
require_once 'modelo/pacienteModelo.php';
require_once 'modelo/pruebaModelo.php';
$pacientes = new PacienteModelo();
$datos     = $pacientes->Listar();




require_once "vista/cabecera.php";

require_once 'vista/consultarPaciente.php';


if (isset($_POST["eliminarregistro"]) and $_POST["eliminarregistro"] == "si") {
    $id_paciente = $_POST["id_paciente"];

    $pacienteModelo = new PacienteModelo();

    $pacienteModelo->Eliminar($id_paciente);
    
    require_once "vista/cabecera.php";

    require_once 'vista/consultarPaciente.php';

}

if (isset($_POST["guardarregistroprueba"]) and $_POST["guardarregistroprueba"] == "si") {
    //$id_paciente = $_POST["id_paciente"];
    require_once 'modelo/pruebaModelo.php';

    $tipo_prueba       =        $_POST["tipo_prueba"];
    $codigo_notificacion     = $_POST["codigo_notificacion"];
    $numero_lamina_pdrm       = $_POST["numero_lamina_pdrm"];
    $tipo_busqueda =            $_POST["tipo_busqueda"];
    $especie_plasmodium      = $_POST["especie_plasmodium"];
    $fecha_inicio_fiebre    = $_POST["fecha_inicio_fiebre"];
    $fecha_toma_lamina         = $_POST["fecha_toma_lamina"];
    $lugar_toma_lamina     = $_POST["lugar_toma_lamina"];
    $id_paciente     = $_POST["id"];


    $pru = new Prueba();

    $pru->__SET('id_pruebas', null);
    $pru->__SET('tipo_prueba', $tipo_prueba);
    $pru->__SET('codigo_notificacion', $codigo_notificacion);
    $pru->__SET('numero_lamina_pdrm', $numero_lamina_pdrm);
    $pru->__SET('tipo_busqueda', $tipo_busqueda);
    $pru->__SET('especie_plasmodium', $especie_plasmodium);
    $pru->__SET('fecha_inicio_fiebre', $fecha_inicio_fiebre);
    $pru->__SET('fecha_toma_lamina', $fecha_toma_lamina);
    $pru->__SET('lugar_toma_lamina', $lugar_toma_lamina);
    $pru->__SET('parroquia_id',34);
    $pru->__SET('id_paciente',$id_paciente);

    $pruebaModelo = new PruebaModelo();
    //var_dump($pac);
    //exit();

    $pruebaModelo->Registrar($pru);

}

if (isset($_POST["guardartratamiento"]) and $_POST["guardartratamiento"] == "si") {
    //$id_paciente = $_POST["id_paciente"];
    require_once 'modelo/tratamientoModelo.php';

    $nombre       =        $_POST["nombre"];
    $cantidad     = $_POST["cantidad"];
    $fecha_suministrado       = $_POST["fecha_suministrado"];
    $id_paciente     = $_POST["id_paciente"];




    $tra = new Tratamiento();

    $tra->__SET('id_tratamiento', null);
    $tra->__SET('nombre', $nombre);
    $tra->__SET('cantidad', $cantidad);
    $tra->__SET('fecha_suministrado', $fecha_suministrado);
    $tra->__SET('id_paciente',$id_paciente);

    $tratamientoModelo = new TratamientoModelo();
    //var_dump($pac);
    //exit();

    $tratamientoModelo->Registrar($tra);

}

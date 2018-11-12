<?php
//require_once 'modelo/estadoModelo.php';
require_once 'modelo/pacienteModelo.php';
require_once 'modelo/estadoModelo.php';

$estados      = new EstadoModelo();
$datosEstados = $estados->Listar();

if (isset($_POST["guardarregistro"]) and $_POST["guardarregistro"] == "si") {
    
    $nombre_paciente       = $_POST["nombre"];
    $apellido_paciente     = $_POST["apellido"];
    $cedula_paciente       = $_POST["cedula"];
    $nacionalidad_paciente = $_POST["nacionalidad_paciente"];
    $fecha_nacimiento      = $_POST["fecha_nacimiento"];
    $direccion_paciente    = $_POST["direccion_paciente"];
    $sexo_paciente         = $_POST["sexo_paciente"];
    $telefono_paciente     = $_POST["telefono_paciente"];
    $etnia_paciente        = $_POST["etnia_paciente"];

    $id_parroquia = $_POST["parroquia"];

    //$id_usuario_sistema= $_POST [""];
    $email_paciente       = $_POST["email"];
    $estadocivil_paciente = $_POST["estadocivil_paciente"];
    $ocupacion            = $_POST["ocupacion"];
    $peso_paciente        = $_POST["peso_paciente"];

    $pac = new Paciente();

    $pac->__SET('id_paciente', null);
    $pac->__SET('nombre_paciente', $nombre_paciente);
    $pac->__SET('apellido_paciente', $apellido_paciente);
    $pac->__SET('cedula_paciente', $cedula_paciente);
    $pac->__SET('nacionalidad_paciente', $nacionalidad_paciente);
    $pac->__SET('fecha_nacimiento', $fecha_nacimiento);
    $pac->__SET('direccion_paciente', $direccion_paciente);
    $pac->__SET('sexo_paciente', $sexo_paciente);
    $pac->__SET('telefono_paciente', $telefono_paciente);
    $pac->__SET('etnia_paciente', $etnia_paciente);
    $pac->__SET('id_usuario_sistema', 1);

    $pac->__SET('id_parroquia', $id_parroquia);

    $pac->__SET('email_paciente', $email_paciente);
    $pac->__SET('estadocivil_paciente', $estadocivil_paciente);
    $pac->__SET('ocupacion', $ocupacion);
    $pac->__SET('peso_paciente', $peso_paciente);

    $pacienteModelo = new PacienteModelo();
    

    $pacienteModelo->Registrar($pac);
    

}

require_once "vista/cabecera.php";
require_once 'vista/registroPaciente1.php';
